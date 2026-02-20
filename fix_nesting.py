import os
import re

def fix_form_structure(directory):
    # This pattern looks for a form-body that isn't closed before form-footer
    # It identifies form-body, the content inside (like wizard-steps), and then the form-footer
    # We want to make sure there's a </div> before form-footer to close form-body.
    
    for filename in os.listdir(directory):
        if filename.endswith(".blade.php"):
            path = os.path.join(directory, filename)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Check if form-body is closed before form-footer
            # A simple way: if "form-body" exists and "form-footer" exists, 
            # we should have at least 3 closing divs after form-body starts (one for body, one for footer, one for container)
            # excluding internal divs like wizard-steps.
            
            if "form-body" in content and "form-footer" in content:
                # Let's count divs from form-body to the end
                body_start = content.find('<div class="form-body">')
                footer_start = content.find('<div class="form-footer">')
                
                # If there's no </div> between body_start and footer_start that isn't part of wizard-steps...
                # This is tricky with regex. Let's try a simpler replacement for the known broken structure.
                
                # Known broken: 
                # <div class="form-body">
                #    <div class="wizard-steps">...</div>
                # <div class="form-footer">
                
                broken_pattern = re.compile(r'(<div class="form-body">.*?<div class="wizard-steps">.*?</div>)\s*(<div class="form-footer">)', re.DOTALL)
                
                # If we match this, we need to insert a </div> before form-footer
                # And check if there's a missing </div> at the end.
                
                if broken_pattern.search(content):
                    temp_content = broken_pattern.sub(r'\1\n    </div>\n\n    \2', content)
                    
                    # Now check if it ends with exactly two </div> before @endsection
                    # If it only has one, add another.
                    if temp_content.count('</div>') < temp_content.count('<div'):
                        # Very crude check, but let's see.
                        # Standard end:
                        #     </div>
                        # </div>
                        # @endsection
                        
                        if '</div>\n</div>\n@endsection' not in temp_content:
                            temp_content = temp_content.replace('</div>\n@endsection', '</div>\n</div>\n@endsection')
                    
                    if temp_content != content:
                        with open(path, 'w', encoding='utf-8') as f:
                            f.write(temp_content)
                        print(f"Fixed nesting in: {filename}")

if __name__ == "__main__":
    forms_dir = r"c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms"
    fix_form_structure(forms_dir)
