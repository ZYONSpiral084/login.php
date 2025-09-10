# 🌐 CI PHP Login — Educational Demo
**2025-09-09**

**Languages:** [English](README.md) • [Português (pt-BR)](README.pt-BR.md) • [中文（简体）](README.zh-CN.md)

---

## 📌 Summary / Resumo / 概要

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| **A practical and concise example of CI/CD with PHP 8.2, designed for study purposes.** This repository provides a minimal PHP login (`index.php`) and two GitHub Actions workflows: a **reusable workflow** (`.github/workflows/login.yml`) and a **specific workflow** (`.github/workflows/php-login.yml`) that runs on push/PR. Developed as an academic activity at **Fatec Ourinhos** and maintained by **Nycolas-Salvego**. | **Um exemplo prático e enxuto de CI/CD com PHP 8.2, pensado para estudo.** Este repositório reúne um `index.php` de login mínimo e dois workflows do GitHub Actions: um **reusável** (`.github/workflows/login.yml`) e outro **específico** (`.github/workflows/php-login.yml`) que dispara em push/PR. Desenvolvido como atividade acadêmica na **Fatec Ourinhos** e mantido por **Nycolas-Salvego**. | **一个用于学习的 PHP 8.2 CI/CD 实践示例。** 本仓库提供一个最小化的 PHP 登录示例（`index.php`）以及两个 GitHub Actions 工作流：一个**可重用工作流**（`.github/workflows/login.yml`）和一个在 push/PR 时运行的**特定工作流**（`.github/workflows/php-login.yml`）。该项目为 Fatec Ourinhos 学术活动，由 **Nycolas-Salvego** 维护。 |

---

## 📂 Main Contents / Conteúdo principal / 主要内容

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| - `index.php` — simple login form with session validation (sample credentials).<br>- `.github/workflows/login.yml` — reusable workflow (checkout, setup PHP 8.2, validate syntax).<br>- `.github/workflows/php-login.yml` — CI workflow (push on `master`, PR), installs deps, validates syntax, simulates test/build/deploy. | - `index.php` — formulário de login simples com validação por sessão (credenciais de exemplo).<br>- `.github/workflows/login.yml` — workflow reutilizável (checkout, configurar PHP 8.2, validar sintaxe).<br>- `.github/workflows/php-login.yml` — workflow de CI (push em `master`, PR), instala dependências, valida sintaxe e simula teste/build/deploy. | - `index.php` — 简单登陆表单，含会话验证（示例凭据）。<br>- `.github/workflows/login.yml` — 可重用工作流（检出、设置 PHP 8.2、验证语法）。<br>- `.github/workflows/php-login.yml` — CI 工作流（在 `master` push 与 PR 时触发），安装依赖、验证语法并模拟测试/构建/部署。 |

---

## 💡 Why use it / Por que usar / 为什么使用

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| - Learn how to integrate PHP 8.2 with GitHub Actions.<br>- Understand reusable workflows and minimal CI steps.<br>- Safe sandbox for experimentation (not for production). | - Aprender a integrar PHP 8.2 com GitHub Actions.<br>- Entender workflows reutilizáveis e passos mínimos de CI.<br>- Ambiente seguro para experimentos (não é produção). | - 学习如何将 PHP 8.2 与 GitHub Actions 集成。<br>- 理解可重用工作流与最小 CI 步骤。<br>- 安全的实验环境（非生产用途）。 |

---

## ⚡ Quick Run (local) / Execução rápida (local) / 本地快速运行

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| ```bash
php -S localhost:8000
# Access http://localhost:8000
``` | ```bash
php -S localhost:8000
# Acesse http://localhost:8000
``` | ```bash
php -S localhost:8000
# 访问 http://localhost:8000
``` |

---

## ✅ Security & Notes / Segurança & Observações / 安全与注意事项

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| - Do not commit real credentials. Keep sample credentials for demo only.<br>- Use GitHub Secrets for any sensitive values.<br>- This demo validates PHP syntax and simulates CI steps — adapt for real pipelines. | - Não comite credenciais reais. Mantenha credenciais de exemplo apenas para demo.<br>- Use GitHub Secrets para valores sensíveis.<br>- Esta demo valida sintaxe PHP e simula passos de CI — adapte para pipelines reais. | - 请勿提交真实凭据，示例凭据仅用于演示。<br>- 对于敏感信息请使用 GitHub Secrets。<br>- 本示例仅验证 PHP 语法并模拟 CI 步骤——在真实流水线中请作相应调整。 |

---

## 🔁 Git workflow suggestion / Sugestão de fluxo Git / Git 工作流建议

```bash
git checkout -b feature/php-ci
# update index.php or workflows
git add index.php .github/workflows/*.yml
git commit -m "Improve PHP CI and add comments"
git push origin feature/php-ci
# open PR and run workflow
```

---

## 📜 License / Licença / 许可证

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| Academic / educational use. Please cite the author when reusing. | Uso acadêmico / educacional. Cite o autor ao reutilizar. | 学术 / 教育用途。重复使用请注明作者。 |
