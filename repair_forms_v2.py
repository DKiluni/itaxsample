import os
import re

def fix_wizard_steps_v2(directory):
    # Pattern 1: Broken 2-step wizard
    broken_pattern_2 = re.compile(
        r'<div class="wizard-steps">\s*<div class="step-item active"><div class="step-circle">1</div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*</div>', 
        re.DOTALL
    )
    
    # Pattern 2: Broken 3-step wizard
    broken_pattern_3 = re.compile(
        r'<div class="wizard-steps">\s*<div class="step-item active"><div class="step-circle">1</div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*</div>', 
        re.DOTALL
    )

    # Pattern 3: Broken 1-step (unlikely but possible)
    broken_pattern_1 = re.compile(
        r'<div class="wizard-steps">\s*<div class="step-item active"><div class="step-circle">1</div>\s*<div class="step-item"><div class="step-label">(.*?)</div></div>\s*</div>', 
        re.DOTALL
    )
    
    # Replacement templates
    rep_2 = r'''        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">\1</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">\2</div></div>
        </div>'''
        
    rep_3 = r'''        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">\1</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">\2</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">\3</div></div>
        </div>'''

    rep_1 = r'''        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">\1</div></div>
        </div>'''

    for filename in os.listdir(directory):
        if filename.endswith(".blade.php"):
            path = os.path.join(directory, filename)
            with open(path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            orig = content
            content = broken_pattern_3.sub(rep_3, content)
            content = broken_pattern_2.sub(rep_2, content)
            content = broken_pattern_1.sub(rep_1, content)
            
            if orig != content:
                with open(path, 'w', encoding='utf-8') as f:
                    f.write(content)
                print(f"Fixed wizard steps in: {filename}")

if __name__ == "__main__":
    forms_dir = r"c:\Users\david\Documents\laravel projects\itaxsample\resources\views\forms"
    fix_wizard_steps_v2(forms_dir)
