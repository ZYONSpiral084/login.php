# CI PHP Login — Demo Educacional

**Um exemplo prático e enxuto de CI/CD com PHP 8.2, pensado para estudo.**

Este repositório reúne uma implementação mínima de login em PHP (`index.php`) e dois workflows do GitHub Actions:

- **Workflow reutilizável:** `.github/workflows/login.yml` — configurado para ser chamado por outros workflows, faz checkout, configura PHP 8.2 e valida a sintaxe do arquivo principal.
- **Workflow específico:** `.github/workflows/php-login.yml` — dispara em `push` (branch `master`) e `pull_request`, instala dependências básicas, valida sintaxe, e simula etapas de teste/build/deploy.

Desenvolvido como atividade acadêmica na **Fatec Ourinhos** e mantido por **Nycolas-Salvego**, o projeto é destinado ao aprendizado prático de integração contínua aplicada a um cenário realista, porém simplificado.

---

## Conteúdo principal
- `index.php` — formulário de login simples com validação por sessão (credenciais de exemplo).
- `.github/workflows/login.yml` — workflow reutilizável.
- `.github/workflows/php-login.yml` — workflow de CI/CD para push e PR.

## Por que usar
- Aprender a integrar PHP com GitHub Actions de forma prática.
- Entender workflows reutilizáveis e automações básicas.
- Ambiente seguro para experimentação (sem risco em produção — ver observações).

## Execução rápida (local)
```bash
php -S localhost:8000
# Acesse http://localhost:8000
