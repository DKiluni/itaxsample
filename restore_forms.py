import os

def restore_forms(directory, filenames):
    # The corrupted block pattern (normalized whitespace for replacement)
    # We'll use a more flexible replacement to handle the specific files
    
    correct_wizard = """        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">Basic Details</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">Specifics</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">Declaration</div></div>
        </div>"""

    for filename in filenames:
        filepath = os.path.join(directory, filename)
        if not os.path.exists(filepath):
            continue
            
        with open(filepath, 'r', encoding='utf-8') as f:
            lines = f.readlines()

        # Find the corrupted block range (lines 14 to 22 roughly)
        # We'll search for 'wizard-steps' and replace the whole block until we find the start of 'form-section' or the footer
        
        new_lines = []
        in_corrupted_block = False
        searching_for_end = False
        
        for line in lines:
            if '<div class="wizard-steps">' in line:
                in_corrupted_block = True
                new_lines.append(correct_wizard + "\n")
                continue
            
            if in_corrupted_block:
                # Skip lines until we find the start of a form-section or the footer or the end of the form-body
                if '<div class="form-section">' in line or '<div class="form-footer">' in line or '</div>\n\n    <div class="form-footer">' in line:
                    in_corrupted_block = False
                    # We might have skipped the closing div of form-body if we were too aggressive
                    # But the correct_wizard ends with a closing div for wizard-steps.
                    # The files usually had:
                    # </div> (ends wizard)
                    # </div> (ends form-body)
                    # </div> (ends form-container - wait, no)
                    
                    # Actually, let's just look for the next meaningful structural tag
                    new_lines.append(line)
                continue
            else:
                new_lines.append(line)

        # Final check on closing tags: the structure should be:
        # <div class="form-container">
        #   <div class="form-header">...</div>
        #   <div class="form-body">
        #     <div class="wizard-steps">...</div>
        #     [Content]
        #   </div>
        #   <div class="form-footer">...</div>
        # </div>
        
        # Some files have NO content (just the wizard). 
        # In those cases, the skip might be too greedy.
        
        content = "".join(new_lines)
        # Fix the "extra div" issue manually if it persists
        # Pattern usually: </div>\n    </div>\n    </div>\n\n    <div class="form-footer">
        # Should be: </div>\n    </div>\n\n    <div class="form-footer">
        content = content.replace('</div>\n    </div>\n    </div>\n\n    <div class="form-footer">', '</div>\n    </div>\n\n    <div class="form-footer">')
        
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Restored: {filename}")

if __name__ == "__main__":
    forms_dir = r'c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms'
    targets = [
        'apply_payment_plan.blade.php',
        'change_accounting_period.blade.php',
        'change_tso.blade.php',
        'rent_income_agent_amend.blade.php',
        'update_contact_details.blade.php',
        'wht_it_agent_amend.blade.php',
        'wht_vat_agent_amend.blade.php'
    ]
    restore_forms(forms_dir, targets)
