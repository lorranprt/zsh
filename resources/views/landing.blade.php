<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ZSH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            background: #0C1519;
            color: #eaeaea;
            font-family: 'Segoe UI', sans-serif;
        }

        .ecosystem-section {
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 100px 20px;
            background-color: #0C1519;
            background-image: 
                linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .subtitle {
            color: #C7A17A;
            font-size: 12px;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .title {
            font-size: 56px;
            font-weight: 800;
            text-align: center;
            color: #ffffff;
            margin-bottom: 70px;
        }

        .title span {
            color: #C7A17A;
            text-shadow: 0 0 20px rgba(199,161,122,0.4);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            width: 85%;
            max-width: 1400px;
        }

        /* LINK ENVOLVENDO O CARD */
        .card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .card {
            background: #162127;
            border: 1px solid rgba(255,255,255,0.05);
            padding: 40px 30px;
            transition: 0.3s ease;
            position: relative;
            border-radius: 8px;
            height: 100%;
        }

        .card-link:hover .card {
            border-color: #C7A17A;
            background: #3A3534;
            box-shadow: 0 0 30px rgba(199,161,122,0.15);
            transform: translateY(-5px);
        }

        .card-number {
            color: #C7A17A;
            font-size: 13px;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .card p {
            font-size: 14px;
            color: #cfcfcf;
            line-height: 1.6;
        }

        @media(max-width: 1100px){
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 650px){
            .cards {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 38px;
            }
        }
    </style>
</head>

<body>

<header>@include('partials.navbar')</header>

<main>
    <section class="ecosystem-section">

        <div class="subtitle">ZSH COMPANY</div>

        <div class="title">
            NOSSO <span>ECOSSISTEMA</span>
        </div>

        <div class="cards">

            <a href="/comunidade" class="card-link">
                <div class="card">
                    <div class="card-number">01</div>
                    <h3>Comunidade</h3>
                    <p>
                        Uma das melhores comunidades de jogos! Aqui você pode encontrar
                        pessoas para jogar FiveM, Valorant, Counter-Strike e vários outros jogos.
                        Também realizamos sorteios, eventos e muito mais.
                    </p>
                </div>
            </a>

            <a href="{{ route('digital') }}" class="card-link">
                <div class="card">
                    <div class="card-number">02</div>
                    <h3>Design & Otimizações</h3>
                    <p>
                        Oferecemos serviços completos para elevar seu projeto ao próximo nível.
                        Otimizações de PC, edições profissionais e estratégias de marketing
                        com foco em qualidade, desempenho e resultados.
                    </p>
                </div>
            </a>

            <a href="/loja" class="card-link">
                <div class="card">
                    <div class="card-number">03</div>
                    <h3>Loja Oficial</h3>
                    <p>
                        Produtos exclusivos da marca. Acesse itens oficiais
                        e edições limitadas com qualidade premium.
                    </p>
                </div>
            </a>

            <a href="/fivem" class="card-link">
                <div class="card">
                    <div class="card-number">04</div>
                    <h3>FiveM</h3>
                    <p>
                        Cidades FiveM nos estilos PVP e RP, proporcionando
                        experiências intensas e imersivas para todos os tipos de jogadores.
                    </p>
                </div>
            </a>

        </div>

    </section>
</main>

<footer>@include('partials.footer')</footer>
</body>
</html>
