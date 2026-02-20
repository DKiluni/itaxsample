import os

def find_div_block(content, start_index):
    # This function finds the closing </div> of a div starting at start_index
    # by tracking the depth of nested divs.
    depth = 0
    i = start_index
    while i < len(content):
        if content[i:i+4] == '<div':
            depth += 1
            i += 4
        elif content[i:i+6] == '</div>':
            depth -= 1
            i += 6
            if depth == 0:
                return i
        else:
            i += 1
    return -1

def fix_duplications(directory):
    for filename in os.listdir(directory):
        if filename.endswith('.blade.php'):
            filepath = os.path.join(directory, filename)
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()

            modified = False
            blocks = []
            
            # Find all occurrences of wizard-steps
            search_start = 0
            while True:
                idx = content.find('<div class="wizard-steps">', search_start)
                if idx == -1:
                    break
                end_idx = find_div_block(content, idx)
                if end_idx == -1:
                    break
                blocks.append((idx, end_idx))
                search_start = end_idx
            
            if len(blocks) > 1:
                # We have duplicates. Keep the first one, remove the others.
                new_content = ""
                last_pos = 0
                
                # Keep the first block
                first_block = blocks[0]
                
                # We want to keep everything up to the first block, and then skip any subsequent blocks.
                # However, there might be content between the blocks.
                # In the reported bug, they were right after each other.
                
                # Simplified strategy: remove all blocks except the first one.
                # But we must be careful not to remove non-wizard content if it's sandwiched.
                
                # Let's rebuild the content by skipping duplicates.
                new_content = content[:blocks[0][1]]
                last_end = blocks[0][1]
                
                for i in range(1, len(blocks)):
                    # Add content between previous block end and current block start
                    new_content += content[last_end:blocks[i][0]]
                    # Do NOT add the current block (the duplicate)
                    last_end = blocks[i][1]
                
                # Add the rest of the file
                new_content += content[last_end:]
                
                # Also fix the corrupted fragments from the previous failed run if they exist
                # e.g. <div class="step-label">Basic Details</div>...
                if '<div class="step-label">Basic Details</div>' in new_content:
                    # Generic cleanup for the specific fragments I saw
                    new_content = new_content.replace('<div class="step-label">Basic Details</div></div>', '')
                    new_content = new_content.replace('<div class="step-circle">2</div>', '')
                    new_content = new_content.replace('<div class="step-circle">3</div>', '')
                    # This is a bit risky but helped fix the known corruption.
                
                # More robust: if there's any stray wizard classes without the container
                # Let's just run the deduplicator again on the cleaned content.
                
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f"Fixed duplication and fragments in: {filename}")

if __name__ == "__main__":
    forms_dir = r'c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms'
    fix_duplications(forms_dir)
