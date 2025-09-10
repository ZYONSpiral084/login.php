# 🌐 CI PHP Login — Demo Educacional
**2025-09-09**

**Idiomas:** [English](README.md) • [Português (pt-BR)](README.pt-BR.md) • [中文（简体）](README.zh-CN.md)

---

## 📌 Resumo

Exemplo prático de CI/CD com PHP 8.2 para estudo. Contém `index.php` (login simples) e dois workflows do GitHub Actions: um reusável (`login.yml`) e outro específico (`php-login.yml`) que dispara em push/PR.

---

## 📂 Conteúdo principal

- `index.php` — formulário de login simples (credenciais de exemplo).  
- `.github/workflows/login.yml` — workflow reutilizável.  
- `.github/workflows/php-login.yml` — workflow de CI para push/PR.

---

## ⚡ Execução rápida (local)

```bash
php -S localhost:8000
# Acesse http://localhost:8000
```

---

## ✅ Segurança & Observações

- Não comite credenciais reais; mantenha credenciais de exemplo apenas para demonstração.  
- Use GitHub Secrets para valores sensíveis.  
- Este repositório valida sintaxe PHP e simula etapas de CI — adapte para uso real.

---

## 🔁 Fluxo Git sugerido

```bash
git checkout -b feature/php-ci
git add index.php .github/workflows/*.yml
git commit -m "Improve PHP CI and add comments"
git push origin feature/php-ci
```

---

## 📜 Licença

Uso acadêmico / educacional. Cite o autor ao reutilizar.
