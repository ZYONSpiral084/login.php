# 🌐 CI PHP Login — Demo Educacional
**2025-09-09**

**Idiomas:** [English](README.md) • [Português (pt-BR)](README.pt-BR.md) • [中文（简体）](README.zh-CN.md)

---

<!-- Badges (substitua por URLs reais se desejar) -->
[![License](https://img.shields.io/badge/license-academic-lightgrey)](#) [![CI](https://img.shields.io/badge/ci-github--actions-blue)](#)

---

## 📌 Resumo

Exemplo prático de CI/CD com PHP 8.2 para estudo. Contém `index.php` (login simples) e dois workflows do GitHub Actions: um reusável (`login.yml`) e outro específico (`php-login.yml`) que dispara em push/PR.

---

## 📂 Conteúdo principal

- `index.php` — formulário de login simples (credenciais de exemplo).  
- `.github/workflows/login.yml` — workflow reutilizável.  
- `.github/workflows/php-login.yml` — workflow de CI para push/PR.  
- `README.pt-BR.md` / `README.zh-CN.md` — documentações traduzidas.

---

## ⚡ Execução rápida (local)

```bash
php -S localhost:8000
# Acesse http://localhost:8000
```

---

## 🧾 Exemplo `index.php` (mínimo)

> Arquivo intencionalmente mínimo — apenas para aprendizado. Não usar em produção.

O conteúdo do `index.php` de exemplo está descrito no README principal. Mantê-lo simples para fins educacionais.

---

## ✅ Segurança & observações

- Não comite credenciais reais; mantenha credenciais de exemplo apenas para demonstração.  
- Use GitHub Secrets para valores sensíveis.  
- Esta demo valida sintaxe PHP e simula etapas de CI — adapte para uso real.

---

## 🔁 Fluxo Git sugerido

```bash
git checkout -b feature/php-ci
git add index.php .github/workflows/*.yml README*.md
git commit -m "Improve PHP CI and add comments"
git push origin feature/php-ci
```

---

## 📜 Licença

Uso acadêmico / educacional. Cite o autor ao reutilizar.
