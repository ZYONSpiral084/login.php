# 🌐 CI PHP 登录 — 教学演示
**2025-09-09**

**语言：** [English](README.md) • [Português (pt-BR)](README.pt-BR.md) • [中文（简体）](README.zh-CN.md)

---

## 📌 概要

面向学习的 PHP 8.2 CI/CD 实践示例。包含 `index.php`（简单登录）与两个 GitHub Actions 工作流：可重用的 `login.yml` 与特定的 `php-login.yml`（在 push/PR 时触发）。

---

## 📂 主要内容

- `index.php` — 登录表单（示例凭据）。  
- `.github/workflows/login.yml` — 可重用工作流。  
- `.github/workflows/php-login.yml` — CI 工作流（push/PR）。  
- `README.pt-BR.md` / `README.zh-CN.md` — 翻译文档。

---

## ⚡ 本地快速运行

```bash
php -S localhost:8000
# 访问 http://localhost:8000
```

---

## ✅ 安全与注意事项

- 请勿提交真实凭据，示例凭据仅供演示。  
- 对于敏感信息请使用 GitHub Secrets。  
- 本仓库验证 PHP 语法并模拟 CI 步骤——在真实流程中请调整。

---

## 🔁 Git 工作流建议

```bash
git checkout -b feature/php-ci
git add index.php .github/workflows/*.yml
git commit -m "Improve PHP CI and add comments"
git push origin feature/php-ci
```

---

## 📜 许可证

学术 / 教育用途。重复使用请注明作者。
