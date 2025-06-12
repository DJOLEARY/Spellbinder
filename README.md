# Spellbinder

## Deployment

1. `ssh spellbinder.eu`
2. `tmux attach`
3. `php artisan down`
4. `git pull`
5. `php artisan migrate`
6. `php artisan optimize`
7. `npm run build`
8. `php artisan up`
9. `tmux detach`
10. `exit`
