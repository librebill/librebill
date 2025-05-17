# Contributing to LibreBill

Thank you for considering contributing to LibreBill! Your help makes this project better for everyone.

We welcome contributions from developers of all experience levels. Whether it's a small bug fix, a big feature, or just improving documentation, every bit helps.

---

## Ground Rules

1. **All contributions are licensed under GPLv3**  
   By submitting code, you agree that your contributions will be released under the same [GNU GPLv3](LICENSE.md) license as the rest of the project.

2. **Be respectful and inclusive**  
   We follow a code of conduct. Please treat others with kindness and professionalism.

3. **Write clear, maintainable code**  
   - Follow the existing code style and formatting.
   - Include meaningful comments where helpful.
   - Test your code before submitting, if possible.
   - Follow the PSR standards for PHP code.

4. **AI-generated code is allowed, with restrictions**  
   You may use AI tools (e.g. GitHub Copilot, ChatGPT, etc.) to assist with your contributions, **as long as**:
   - The code does **not break existing functionality** or tests.
   - It is **not copied from non-public sources** or content that violates copyright.
   - You review and understand the code — you are still responsible for its quality and legality.

5. **Prefer pull requests over issues**  
   If you already have a fix or improvement in mind, feel free to submit a pull request directly.

---

## How to Contribute

### 1. Fork the repository

```bash
git clone https://github.com/your-username/[PROJECT-NAME].git
cd [PROJECT-NAME]
```

### 2. Branch off and make your patches

Your branch name should be prefixed with:

* `fix/` for bug fixes
* `feat/` for new features
* `chore/` for chores

For instance, if you want to correct a typo, your branch name should be `fix/fix-login-typo`.

```bash
# Follow the branch naming conventions
git checkout -b fix/your-fix
# ...do your edits...
# Push your changes
git add .
git commit -m "fix: a description of your work"
git push -u origin fix/your-fix
```

Once done, submit a pull request so the maintainers can review.
