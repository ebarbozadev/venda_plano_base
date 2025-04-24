<footer id="footer" aria-labelledby="footer-titulo">
    <div class="container">
        <div class="footer-brand">
            <a href="/" aria-label="Página inicial Amazon Prime">
                <img
                    width="200"
                    src="{{ asset('img/svg/logo.svg') }}"
                    alt="Amazon Prime - logo oficial" />
            </a>
        </div>

        <nav aria-label="Navegação no rodapé">
            <ul class="footer-links">
                <li><a href="#novidades">Novidades</a></li>
                <li><a href="#diferenciais">Diferenciais</a></li>
                <li><a href="#depoimentos">Depoimentos</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>

    </div>
    <div class="footer-copy">
        <small>
            &copy; {{ date('Y') }} Amazon Prime. Todos os direitos reservados.
        </small>
    </div>
</footer>