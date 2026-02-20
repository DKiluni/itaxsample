import os

def purge_fragments(directory):
    # The specific fragmented HTML structure to remove
    fragment_start = '<div class="step-label">Basic Details</div></div>'
    fragment_end = '</div>'
    
    for filename in os.listdir(directory):
        if filename.endswith('.blade.php'):
            filepath = os.path.join(directory, filename)
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()

            if fragment_start in content:
                # Find the start of the fragment
                start_idx = content.find(fragment_start)
                # Find the next </div> that ends this trash block
                # Looking at the pattern, it's usually:
                # <div class="step-label">Basic Details</div></div>
                # <div class="step-item"><div class="step-circle">2</div><div class="step-label">Specifics</div></div>
                # <div class="step-item"><div class="step-circle">3</div><div class="step-label">Declaration</div></div>
                # </div>
                
                # Let's find the closing </div> that is NOT followed by another step-item soon
                # Or just look for the declaration block.
                trash_end = content.find('<div class="step-label">Declaration</div></div>\n</div>', start_idx)
                if trash_end == -1:
                     # try without newline
                     trash_end = content.find('<div class="step-label">Declaration</div></div></div>', start_idx)
                
                if trash_end != -1:
                    # Find the end of that match (which is the closing </div>)
                    # The match ends with '</div>' which is 6 chars, but wait, there's another </div> after it?
                    # Let's just find the first </div> after Declaration.
                    final_div = content.find('</div>', trash_end + len('<div class="step-label">Declaration</div></div>'))
                    if final_div != -1:
                        new_content = content[:start_idx] + content[final_div+6:]
                        # Clean up surrounding whitespaces
                        new_content = new_content.replace('\n    \n', '\n')
                        
                        with open(filepath, 'w', encoding='utf-8') as f:
                            f.write(new_content)
                        print(f"Purged fragment from: {filename}")

if __name__ == "__main__":
    forms_dir = r'c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms'
    purge_fragments(forms_dir)
