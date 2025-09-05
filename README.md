# 🌐 CI PHP Login — Educational Demo / Demo Educacional

| 🇺🇸 English | 🇧🇷 Português |
|-------------|--------------|
| **A practical and concise example of CI/CD with PHP 8.2, designed for study purposes.**<br><br>This repository provides a minimal implementation of a PHP login (`index.php`) and two GitHub Actions workflows:<br><br>- **Reusable workflow:** `.github/workflows/login.yml` — configured to be called by other workflows, it performs checkout, sets up PHP 8.2, and validates the main file’s syntax.<br>- **Specific workflow:** `.github/workflows/php-login.yml` — triggers on `push` (branch `master`) and `pull_request`, installs basic dependencies, validates syntax, and simulates test/build/deploy steps.<br><br>Developed as an academic activity at **Fatec Ourinhos** and maintained by **Nycolas-Salvego**, this project is aimed at practical learning of continuous integration in a realistic yet simplified scenario. | **Um exemplo prático e enxuto de CI/CD com PHP 8.2, pensado para estudo.**<br><br>Este repositório reúne uma implementação mínima de login em PHP (`index.php`) e dois workflows do GitHub Actions:<br><br>- **Workflow reutilizável:** `.github/workflows/login.yml` — configurado para ser chamado por outros workflows, faz checkout, configura PHP 8.2 e valida a sintaxe do arquivo principal.<br>- **Workflow específico:** `.github/workflows/php-login.yml` — dispara em `push` (branch `master`) e `pull_request`, instala dependências básicas, valida sintaxe, e simula etapas de teste/build/deploy.<br><br>Desenvolvido como atividade acadêmica na **Fatec Ourinhos** e mantido por **Nycolas-Salvego**, o projeto é destinado ao aprendizado prático de integração contínua aplicada a um cenário realista, porém simplificado. |

---

## 📂 Main Contents / Conteúdo principal

| 🇺🇸 English | 🇧🇷 Português |
|-------------|--------------|
| - `index.php` — simple login form with session validation (sample credentials).<br>- `.github/workflows/login.yml` — reusable workflow.<br>- `.github/workflows/php-login.yml` — CI/CD workflow for push and PR. | - `index.php` — formulário de login simples com validação por sessão (credenciais de exemplo).<br>- `.github/workflows/login.yml` — workflow reutilizável.<br>- `.github/workflows/php-login.yml` — workflow de CI/CD para push e PR. |

---

## 💡 Why use it / Por que usar

| 🇺🇸 English | 🇧🇷 Português |
|-------------|--------------|
| - Learn how to integrate PHP with GitHub Actions in a hands-on way.<br>- Understand reusable workflows and basic automations.<br>- Safe environment for experimentation (no production risk — see notes). | - Aprender a integrar PHP com GitHub Actions de forma prática.<br>- Entender workflows reutilizáveis e automações básicas.<br>- Ambiente seguro para experimentação (sem risco em produção — ver observações). |

---

## ⚡ Quick Run (local) / Execução rápida (local)

| 🇺🇸 English | 🇧🇷 Português |
|-------------|--------------|
| ```bash<br>php -S localhost:8000<br># Access http://localhost:8000<br>``` | ```bash<br>php -S localhost:8000<br># Acesse http://localhost:8000<br>``` |
