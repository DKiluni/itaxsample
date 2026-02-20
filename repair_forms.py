import os
import re

def fix_wizard_steps(directory):
    # Pattern to match the broken wizard steps block
    # Specifically looking for the pattern where step-item is not closed and step-circle is followed by another step-item
    broken_pattern = re.compile(r'<div class="wizard-steps">\s*<div class="step-item active"><div class="step-circle">1</div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*</div>', re.DOTALL)

    # Replacement structure
    replacement = r'''        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">\1</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">\2</div></div>
        </div>'''

    # Another common broken pattern might have 3 items
    broken_pattern_3 = re.compile(r'<div class="wizard-steps">\s*<div class="step-item active"><div class="step-circle">1</div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*</div>', re.DOTALL)
    
    replacement_3 = r'''        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">\1</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">\2</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">\3</div></div>
        </div>'''

    for filename in os.listdir(directory):
        if filename.endswith(".blade.php"):
            path = os.path.join(directory, filename)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            new_content = broken_pattern.sub(replacement, content)
            new_content = broken_pattern_3.sub(replacement_3, new_content)
            
            if content != new_content:
                with open(path, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f"Fixed broken wizard steps in: {filename}")

if __name__ == "__main__":
    forms_dir = r"c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms"
    fix_wizard_steps(forms_dir)
