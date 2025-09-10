# 🌐 CI PHP Login — Educational Demo
**2025-09-09**

**Languages:** [English](README.md) • [Português (pt-BR)](README.pt-BR.md) • [中文（简体）](README.zh-CN.md)

---

<!-- Badges (substitua por URLs reais se desejar) -->
[![License](https://img.shields.io/badge/license-academic-lightgrey)](#) [![CI](https://img.shields.io/badge/ci-github--actions-blue)](#)

---

## 📌 Project Overview / Resumo do Projeto / 项目概述

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| **A practical and concise example of CI/CD with PHP 8.2, designed for study purposes.** This repository provides a minimal PHP login (`index.php`) and two GitHub Actions workflows: a **reusable workflow** (`.github/workflows/login.yml`) and a **specific workflow** (`.github/workflows/php-login.yml`) that runs on push/PR. Developed as an academic activity at **Fatec Ourinhos** and maintained by **Nycolas-Salvego**. | **Um exemplo prático e enxuto de CI/CD com PHP 8.2, pensado para estudo.** Este repositório reúne um `index.php` de login mínimo e dois workflows do GitHub Actions: um **reusável** (`.github/workflows/login.yml`) e outro **específico** (`.github/workflows/php-login.yml`) que dispara em push/PR. Desenvolvido como atividade acadêmica na **Fatec Ourinhos** e mantido por **Nycolas-Salvego**. | **一个用于学习的 PHP 8.2 CI/CD 实践示例。** 本仓库提供一个最小化的 PHP 登录示例（`index.php`）以及两个 GitHub Actions 工作流：一个**可重用工作流**（`.github/workflows/login.yml`）和一个在 push/PR 时运行的**专用工作流**（`.github/workflows/php-login.yml`）。该项目为 Fatec Ourinhos 学术活动，由 **Nycolas-Salvego** 维护。 |

---

## 📂 Main contents / Conteúdo principal / 主要内容

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| - `index.php` — simple login page (demo credentials).<br>- `.github/workflows/login.yml` — reusable workflow (checkout, setup PHP 8.2, php -l syntax check).<br>- `.github/workflows/php-login.yml` — specific CI for push/PR (installs deps if any, lints, runs simulated tests).<br>- `README.pt-BR.md` / `README.zh-CN.md` — translated docs. | - `index.php` — página de login simples (credenciais de demonstração).<br>- `.github/workflows/login.yml` — workflow reutilizável (checkout, configura PHP 8.2, verifica sintaxe com `php -l`).<br>- `.github/workflows/php-login.yml` — CI para push/PR (instala dependências se houver, faz lint, simula testes).<br>- `README.pt-BR.md` / `README.zh-CN.md` — documentações traduzidas. | - `index.php` — 简单登录页面（演示凭据）。<br>- `.github/workflows/login.yml` — 可重用工作流（checkout、设置 PHP 8.2、使用 `php -l` 语法检查）。<br>- `.github/workflows/php-login.yml` — 专用 CI（push/PR 时触发，安装依赖（若有）、语法检查、模拟测试）。<br>- `README.pt-BR.md` / `README.zh-CN.md` — 翻译文档。 |

---

## ⚡ Run locally / Execução rápida (local) / 本地快速运行

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| 1. Start the built-in PHP server: `php -S localhost:8000`.<br>2. Open `http://localhost:8000` and test the demo login. | 1. Inicie o servidor embutido do PHP: `php -S localhost:8000`.<br>2. Abra `http://localhost:8000` e teste o login de demonstração. | 1. 启动 PHP 内置服务器：`php -S localhost:8000`。<br>2. 打开 `http://localhost:8000` 并测试演示登录页面。 |

---

## 🧾 Example `index.php` (minimal demo) / Exemplo `index.php` / 示例 `index.php`

> This file is intentionally minimal — for learning only. Do **not** use in production.

```php
<?php
session_start();

$demo_user = 'admin';
$demo_pass = '1234';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === $demo_user && $pass === $demo_pass) {
        $_SESSION['user'] = $user;
        header('Location: /?logged=1');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Demo Login</title>
</head>
<body>
  <?php if (!empty($_GET['logged'])): ?>
    <h2>Welcome, <?= htmlspecialchars($_SESSION['user'] ?? '') ?></h2>
    <p><a href="?logout=1">Logout</a></p>
  <?php else: ?>
    <?php if (!empty($error)) echo "<p style='color:red;'>".htmlspecialchars($error)."</p>"; ?>
    <form method="post" action="/">
      <label>Username: <input name="username" required></label><br>
      <label>Password: <input name="password" type="password" required></label><br>
      <button type="submit">Login</button>
    </form>
  <?php endif; ?>
</body>
</html>
```

---

## 🛠 CI Workflows — explanation & example / Explicação dos workflows & exemplo / 工作流说明与示例

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| **Reusable workflow** (`.github/workflows/login.yml`) should expose inputs (e.g., `php-version`) and perform: checkout → setup-php → `php -l index.php` → optional tests. **Specific workflow** (`.github/workflows/php-login.yml`) calls the reusable one or duplicates steps and triggers on push/PR. See sample snippet below. | **Workflow reutilizável** (`.github/workflows/login.yml`) deve expor inputs (ex.: `php-version`) e executar: checkout → setup-php → `php -l index.php` → testes opcionais. **Workflow específico** (`.github/workflows/php-login.yml`) chama o reusável ou repete etapas e dispara em push/PR. Veja o snippet abaixo. | **可重用工作流**（`.github/workflows/login.yml`）应公开输入（例如 `php-version`），并执行：checkout → setup-php → `php -l index.php` → 可选测试。**专用工作流**（`.github/workflows/php-login.yml`）在 push/PR 时触发，可调用可重用工作流或重复执行这些步骤。示例见下。 |

### Sample snippet — reusable workflow usage / Exemplo de uso / 可重用工作流调用示例

```yaml
# .github/workflows/php-login.yml (consumer)
name: PHP Login CI
on:
  push:
    branches: [ "master", "main" ]
  pull_request:

jobs:
  call-login:
    uses: <owner>/<repo>/.github/workflows/login.yml@main
    with:
      php-version: '8.2'
```

### What the reusable `login.yml` typically does
- Checkout code (`actions/checkout@v4`).  
- Setup PHP (`shivammathur/setup-php` with `php-version` input).  
- Run `php -l index.php` (syntax check).  
- Optionally run unit tests (`composer install` + `composer test`) if the project has tests.

---

## ✅ Useful local commands / Comandos úteis locais / 有用的本地命令

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| `php -v` — check PHP version.<br>`php -l index.php` — syntax check.<br>`php -S localhost:8000` — run demo server. | `php -v` — checar versão do PHP.<br>`php -l index.php` — verificar sintaxe.<br>`php -S localhost:8000` — rodar servidor demo. | `php -v` — 检查 PHP 版本。<br>`php -l index.php` — 语法检查。<br>`php -S localhost:8000` — 运行演示服务器。 |

---

## 🔐 Security & notes / Segurança & observações / 安全与注意事项

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| - **Never** commit real credentials. Use environment variables or GitHub Secrets for sensitive data.<br>- This demo uses hardcoded sample credentials only for learning — **not production**.<br>- Keep all code examples minimal and document any changes. | - **Nunca** comite credenciais reais. Use variáveis de ambiente ou Secrets do GitHub para dados sensíveis.<br>- Esta demo usa credenciais fixas apenas para aprendizado — **não** é para produção.<br>- Mantenha os exemplos mínimos e documente alterações. | - **切勿** 提交真实凭据。对敏感数据请使用环境变量或 GitHub Secrets。<br>- 本演示使用硬编码示例凭据，仅供学习——**非**生产环境使用。<br>- 保持示例最小并记录任何修改。 |

---

## 🔁 How to maintain translations / Como manter traduções / 如何维护翻译

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| Keep `README.md` (English) as the source of truth. When you change instructions, update `README.pt-BR.md` and `README.zh-CN.md` or add a `Needs translation update` note. Prefer PRs for translation changes and require at least one native reviewer for zh-CN. | Mantenha `README.md` (inglês) como fonte principal. Ao alterar instruções, atualize `README.pt-BR.md` e `README.zh-CN.md` ou adicione `Needs translation update`. Prefira PRs para traduções e exija pelo menos um revisor nativo para zh-CN. | 将 `README.md`（英文）作为事实来源。更改说明时请更新 `README.pt-BR.md` 与 `README.zh-CN.md` 或添加 `Needs translation update` 注记。翻译改动优先使用 PR，并要求至少一名母语审校者审核 zh-CN。 |

---

## 🧭 Git workflow suggestion / Sugestão de fluxo Git / Git 工作流建议

```bash
git checkout -b feature/php-ci-improvements
git add index.php .github/workflows/*.yml README*.md
git commit -m "Improve PHP CI and documentation"
git push origin feature/php-ci-improvements
# open PR and request review (peer + native reviewer for translations)
```

---

## 👨‍🏫 Credits & license / Créditos & licença / 致谢与许可

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| Developed as an academic exercise at **Fatec Ourinhos**. Maintainer: **Nycolas-Salvego** (ZYONSpiral084). License: academic / educational use — please cite the author when reusing. | Desenvolvido como exercício acadêmico na **Fatec Ourinhos**. Mantenedor: **Nycolas-Salvego** (ZYONSpiral084). Licença: uso acadêmico / educacional — cite o autor ao reutilizar. | 作为 Fatec Ourinhos 学术练习开发。维护者：**Nycolas-Salvego**（ZYONSpiral084）。许可：学术 / 教育用途——重复使用请注明作者。 |

---

## 📌 Final note (direct) / Observação final (na lata) / 最后说明（直白）

| 🇺🇸 English | 🇧🇷 Português | 🇨🇳 中文（简体） |
|---|---|---|
| This README is comprehensive and ready for your repo. If you want, I can also generate the minimal `index.php` file and example `.github/workflows/*.yml` files and put everything into a ZIP ready to upload — tell me and I create them now. | Este README está completo e pronto para o seu repositório. Se quiser, eu também gero o `index.php` mínimo e os workflows de exemplo `.github/workflows/*.yml` e empacoto tudo num ZIP pronto para upload — me diga que eu gero agora. | 该 README 已完整并可直接用于仓库。如需我可生成最小化的 `index.php` 与示例 `.github/workflows/*.yml` 并将所有内容打包成 ZIP 以便上传——告诉我即可立即生成。 |
