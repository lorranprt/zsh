<footer class="footer">
<style>
/* FOOTER */

.footer {
    background: #0A1114;
    border-top: 1px solid rgba(255,255,255,0.05);
    padding-top: 80px;
    margin-top: 100px;
}

.footer-container {
    width: 85%;
    max-width: 1400px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    padding-bottom: 60px;
}

.footer-logo {
    font-size: 24px;
    font-weight: 800;
    letter-spacing: 4px;
    color: #C7A17A;
    margin-bottom: 20px;
}

.footer-brand p {
    color: #b5b5b5;
    font-size: 14px;
    line-height: 1.6;
    max-width: 300px;
}

.footer-links h4 {
    color: #ffffff;
    margin-bottom: 20px;
    font-size: 14px;
    letter-spacing: 2px;
}

.footer-links a {
    display: block;
    text-decoration: none;
    color: #b5b5b5;
    font-size: 14px;
    margin-bottom: 10px;
    transition: 0.3s ease;
}

.footer-links a:hover {
    color: #C7A17A;
    transform: translateX(5px);
}

.footer-bottom {
    text-align: center;
    padding: 20px;
    border-top: 1px solid rgba(255,255,255,0.05);
    font-size: 13px;
    color: #888;
}

/* Responsivo */
@media(max-width: 900px) {
    .footer-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 600px) {
    .footer-container {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .footer-brand p {
        max-width: 100%;
    }
}
</style>
    <div class="footer-container">

        <!-- Marca -->
        <div class="footer-brand">
            <div class="footer-logo">ZSH</div>
            <p>
                Elevando experiências digitais através de comunidade,
                design, tecnologia e inovação.
            </p>
        </div>

        <!-- Links rápidos -->
        <div class="footer-links">
            <h4>Navegação</h4>
            <a href="/">Home</a>
            <a href="/comunidade">Comunidade</a>
            <a href="/servicos">Serviços</a>
            <a href="/loja">Loja</a>
        </div>

        <!-- Redes sociais -->
        <div class="footer-links">
            <h4>Redes Sociais</h4>
            <a href="#" target="_blank">Instagram</a>
            <a href="#" target="_blank">Discord</a>
            <a href="#" target="_blank">YouTube</a>
            <a href="#" target="_blank">TikTok</a>
        </div>

        <!-- Contato -->
        <div class="footer-links">
            <h4>Contato</h4>
            <a href="mailto:contato@zshcompany.com">contato@zshcompany.com</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>
        </div>

    </div>

    <div class="footer-bottom">
        © {{ date('Y') }} ZSH Company. Todos os direitos reservados.
    </div>

</footer>