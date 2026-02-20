<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ZSH Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            background: #0C1519;
            color: #eaeaea;
            font-family: 'Segoe UI', sans-serif;
        }

        .digital-section {
            min-height: 100vh;
            padding: 140px 20px 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .digital-title {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            text-align: center;
        }

        .digital-title span {
            color: #C7A17A;
        }

        .digital-subtitle {
            color: #aaa;
            margin-bottom: 60px;
            text-align: center;
            max-width: 600px;
        }

        /* PRODUTOS */

        .products {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            width: 85%;
            max-width: 1300px;
        }

        .product-card {
            background: #162127;
            border: 1px solid rgba(255,255,255,0.05);
            padding: 30px;
            border-radius: 10px;
            transition: 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            border-color: #C7A17A;
            background: #3A3534;
            transform: translateY(-5px);
        }

        .product-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .price {
            color: #C7A17A;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-card button {
            width: 100%;
            padding: 12px;
            background: #C7A17A;
            border: none;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            border-radius: 6px;
            transition: 0.3s;
        }

        .product-card button:hover {
            opacity: 0.85;
        }

        /* MODAL */

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.7);
            justify-content: center;
            align-items: center;
            padding: 20px;
            z-index: 999;
        }

        .modal-content {
            background: #162127;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            border-radius: 10px;
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 20px;
            cursor: pointer;
            font-size: 18px;
            color: #C7A17A;
        }

        .modal h4 {
            margin-bottom: 10px;
        }

        .modal p {
            color: #ccc;
            font-size: 14px;
        }

        /* TICKETS INFO */

        .ticket-info {
            margin-top: 120px;
            max-width: 800px;
            text-align: center;
        }

        .ticket-info h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .ticket-info span {
            color: #C7A17A;
        }

        @media(max-width: 1000px) {
            .products {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width: 700px) {
            .products {
                grid-template-columns: 1fr;
            }

            .digital-title {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>

<header>@include('partials.navbar')</header>

<section class="digital-section">

    <div class="digital-title">
        ZSH <span>DIGITAL</span>
    </div>

    <div class="digital-subtitle">
        Serviços profissionais de Design, Otimização e Identidade Visual.
        Após a compra, você terá acesso a um ticket exclusivo para entrega e suporte.
    </div>

    <div class="products">

        <div class="product-card">
            <h3>Otimização Premium</h3>
            <div class="price">R$ 149,90</div>
            <button onclick="openModal()">Ver detalhes</button>
        </div>

        <div class="product-card">
            <h3>Identidade Visual</h3>
            <div class="price">R$ 249,90</div>
            <button onclick="openModal()">Ver detalhes</button>
        </div>

        <div class="product-card">
            <h3>Edição Profissional</h3>
            <div class="price">R$ 89,90</div>
            <button onclick="openModal()">Ver detalhes</button>
        </div>

    </div>

    <div class="ticket-info">
        <h3>Sistema de <span>Tickets Privado</span></h3>
        <p>
            Após confirmação do pagamento (Pix, Mercado Pago ou PayPal),
            um ticket privado será criado automaticamente.
            Apenas você e nossa equipe terão acesso.
        </p>
    </div>

</section>

<!-- MODAL -->
<div class="modal" id="productModal">
    <div class="modal-content">
        <div class="close-modal" onclick="closeModal()">✕</div>
        <h4>Detalhes do Produto</h4>
        <p>
            Aqui você poderá mostrar:
            <br><br>
            ✔ Portfólio anterior<br>
            ✔ Exemplos de trabalho<br>
            ✔ Informações técnicas<br>
            ✔ O que está incluso<br>
            ✔ Prazo de entrega<br>
        </p>
        <br>
        <button>Adicionar ao Carrinho</button>
    </div>
</div>

<footer>@include('partials.footer')</footer>

<script>
    function openModal() {
        document.getElementById('productModal').style.display = "flex";
    }

    function closeModal() {
        document.getElementById('productModal').style.display = "none";
    }
</script>

</body>
</html>