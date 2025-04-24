<section id="contact" aria-labelledby="contato-titulo">
    <div class="container">
        <header class="contact-infos">
            <div class="contact-infos-title">
                <img width="28" height="28" src="{{ asset('./img/svg/telefone.svg') }}" alt="Ícone de telefone">
                <h2 id="contato-titulo">Entrar em contato</h2>
            </div>
            <div class="contact-infos-main">
                <h3>Tem dúvidas? Fale com a gente!</h3>
                <p>Nosso time está pronto para te ajudar. Entre em contato agora e tenha as respostas que precisa!</p>
            </div>
        </header>

        <div class="contact-form">
            <form action="/contato" method="POST" aria-labelledby="contato-titulo">
                <div class="form-group">
                    <input type="text" id="nome" name="nome" placeholder="Nome:" required />
                </div>

                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="E-mail:" required />
                </div>

                <div class="form-group">
                    <input type="tel" id="celular" name="celular" placeholder="Número:" required />
                </div>

                <div class="form-group">
                    <textarea id="mensagem" name="mensagem" placeholder="Mensagem:" required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </div>
    </div>
</section>