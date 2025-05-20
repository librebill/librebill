<a href="https://librebill.org" target="_blank"><img src="https://raw.githubusercontent.com/librebill/librebill.github.io/refs/heads/main/images/logo-fixed.svg" height="45px"></a>

> This project is currently under active development. Not for production use yet.

LibreBill is a free and open source billing platform solution for web hosts, cloud providers and freelancers.

<div align="center">
<a href="https://raw.githubusercontent.com/librebill/librebill.github.io/refs/heads/main/images/screenshot.png" target="_blank">
<img src="https://raw.githubusercontent.com/librebill/librebill.github.io/refs/heads/main/images/screenshot.png" />
</a>
</div>

## Technical Justifications

> The choices we make are what we think is a good balance between sensible programming and ease-of-use.
>
> If you think we made a wrong choice, feel free to contact us at [team@librebill.org](mailto:team@librebill.org). We are open for ideas during the preliminary phase of development.

* **Laravel** was picked for familiarity and fast prototyping.
* **Blade** was picked in favor of an API + UI approach because the primary goal is to make deployments easy for anyone, including those with only a shared hosting account.
* **Vue** is used for the default theme's animations and user experience state management, but most functions are written in vanilla JS (creating themes won't need Vue at all).
* **MySQL**, **MariaDB**, **PostgreSQL** and **SQLite** are supported because Laravel supports them out-of-the-box, but only **MariaDB** is officially supported and used by the core developers to test against.
* The **GNU General Public License v3** open source license was picked because we want to prevent privatization of the codebase but still allow commercial use.

## Security & Contributing Guidelines

The primary factors we take into consideration when accepting contributions are as follows, in order:

1. Is the code secure and reasonably-made?
2. Is it the best way to do the task at hand?
3. Is the code original and does not infringe on any other copyrighted work?
4. Has it been reviewed by the community?

For PHP code, we aim to follow the [PHP Standards Recommendations (PSR)](https://www.php-fig.org/psr/) wherever possible (we understand that it may not be a perfect fit for every case).

If you want to report a security vulnerability, please send them via email to [team@librebill.org](mailto:team@librebill.org). **Do not use the GitHub issue tracker to report security issues.**

## License

This project is licensed under the **GNU General Public License v3.0** open source license. See `LICENSE.md` for more information.
