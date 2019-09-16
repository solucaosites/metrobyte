<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width:760px)">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
    <title>Metrobyte</title>
</head>

<body>
    <header class="header">
        <a href="index.html"><img src="img/logo.png" alt=""></a>
    </header>
    <section class="inicial">
        <div class="inicial__inner">
            <div class="incial__video">
                <h1 class="title">Assista o vídeo abaixo e descubra porque a Metrobyte é a melhor solução para a sua
                    empresa:</h1>
                <iframe width="100%" height="310px" class="embed-responsive-item incial__video_reprodutor"
                    src="https://www.youtube.com/embed/IZ05dovel4M" allowfullscreen></iframe>
            </div>
            <div class="form">
                <h2 class="form__title">Preencha o formulário que entraremos em contato em breve.</h2>
                <form action="Config.php" method="POST" name="form_contato" id="form_contato">
                    <input type="text" name="nome" placeholder="Nome Completo">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="empresa" placeholder="Nome da sua empresa">
                    <input type="tel" name="telefone" placeholder="(00) 9999-9999">
                    <label class="label__form" for="servicos">Qual serviço? / produto de interesse?</label>
                    <select name="servicos" id="">
                        <option value="1">Service desk</option>
                        <option value="2">Solução em infraestrutura</option>
                        <option value="3">Gestão de TI</option>
                        <option value="4">Licenciamento / Software</option>
                        <option value="5">Compra de equipamentos</option>
                        <option value="6">Capacitação / Treinamento</option>
                    </select>
                    <label class="label__form" for="computadores">Quantos computadores você tem na sua empresa?</label>
                    <select name="computadores" id="">
                        <option value="1">De 1 a 10 computadores</option>
                        <option value="2">De 11 a 20 computadores</option>
                        <option value="3">De 21 a 50 computadores</option>
                        <option value="4">Mais de 50 computadores</option>
                    </select>
                    <input type="submit" class="btn" value="Clique aqui para fazer um orçamento">
                </form>
            </div>
        </div>
    </section>
    <section class="cards">
        <h1 class="title title__cards">Conheça nossas soluções:</h1>
        <div class="cards__inner">
            <div class="card__info">
                <div class="card__info_title">
                    <h3>4BIZ</h3>
                </div>
                <div class="card__info_content">
                    <strong>
                        Suporte técnico dentro do horário comercial.
                    </strong>
                    <span>
                        <p>&#10004;</p>Prazos de atendimento (acordo de nível de serviço).
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento Remoto.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento Presencial.
                    </span>
                    <span>
                        <p>&#10004;</p>Sistema de gerenciamento de incidentes.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento em inglês, espanhol e português.
                    </span>
                    <span>
                        <p>&#10004;</p>Horário comercial de atendimento.
                    </span>
                    <span>
                        <p>&#10004;</p>Maior economia.
                    </span>
                    <span>
                        <p>&#10004;</p>segurança e praticidade.
                    </span>
                    <span>
                        <p>&#10004;</p>Equipe técnica qualificada.
                    </span>
                </div>
                <div class="card__info_btn">
                    <a href="#" class="btn_card">QUERO UM ORÇAMENTO</a>
                </div>
            </div>
            <div class="card__info">
                <div class="card__info_title">
                    <h3>4CORP</h3>
                </div>
                <div class="card__info_content">
                    <strong>
                        Suporte técnico sob medida para o seu negócio.
                    </strong>
                    <span>
                        <p>&#10004;</p>Horários flexíveis que sua empresa necessita.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento Remoto.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento Presencial.
                    </span>
                    <span>
                        <p>&#10004;</p>Sistema de gerenciamento de incidentes.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento em inglês, espanhol e português.
                    </span>
                    <span>
                        <p>&#10004;</p>Atendimento em dias úteis ou feriados.
                    </span>
                </div>
                <div class="card__info_btn">
                    <a href="#" class="btn_card">QUERO UM ORÇAMENTO</a>
                </div>
            </div>
            <div class="card__info">
                <div class="card__info_title">
                    <h3>ALOCAÇÃO DE RECURSOS</h3>
                </div>
                <div class="card__info_content">
                    <strong>
                        Um técnico exclusivo dentro da sua empresa.
                    </strong>
                    <span>
                        <p>&#10004;</p>Serviço de outsoucing(terceirização).
                    </span>
                    <span>
                        <p>&#10004;</p>Profissional de suporte técnico alocado diretamente na sua
                        empresa.
                    </span>
                    <span>
                        <p>&#10004;</p>Não tenha dor de cabeça com treinamento de funcionário.
                    </span><span>
                        <p>&#10004;</p>Sem burocracias.
                    </span>

                </div>
                <div class="card__info_btn">
                    <a href="#" class="btn_card">QUERO UM ORÇAMENTO</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <h1 class="content_title">Nós descomplicamos a TI da sua empresa!</h1>
        <div class="content__inner">
            <span>
                Há mais de 10 anos no mercado, a Metrobyte tem como propósito, descomplicar a TI . Sabemos que
                cada empresa tem sua especialidade e a nossa é gerenciamento de TI. Estamos prontos para atender
                qualquer demanda relacionada a TI ou informática: Gestão de projetos, segurança da informação,
                virtualização, licenciamento, suporte técnico, lentidão na rede, etc.
            </span>
            <iframe width="100%" height="300px" class="embed-responsive-item incial__video_reprodutor"
                src="https://www.youtube.com/embed/8QuBSzCH-AI" allowfullscreen></iframe>
        </div>
    </section>

    <section class="diferenciais">
        <div class="diferenciais__background"></div>
        <div class="diferenciais__inner">
            <h1 class="title">Por que escolher a Metrobyte?</h1>
            <div class="diferenciais__content">
                <div>
                    <span>
                        <p>&#10004;</p>Nós buscamos implementar soluções robustas e confiáveis.
                    </span>
                    <span>
                        <p>&#10004;</p>Profissionais qualificados e certificados
                    </span>
                    <span>
                        <p>&#10004;</p>Focado na otimização do negócios de nossos cliente
                    </span>
                </div>
                <div>
                    <span>
                        <p>&#10004;</p>10 anos de mercado
                    </span>
                    <span>
                        <p>&#10004;</p>Metodologia Itil
                    </span>
                    <span>
                        <p>&#10004;</p>Estabilização da TI do cliente e deixá-la preparada para o crescimento
                    </span>
                </div>
                <div>
                    <span>
                        <p>&#10004;</p>Experiência em ambientes críticos
                    </span>
                    <span>
                        <p>&#10004;</p>Especialista em resolução de problemas
                    </span>
                    <span>
                        <p>&#10004;</p>SLA Fixo ou Flexível
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="parceiros">
        <h1 class="content_title">Nossos parceiros</h1>
        <div class="parceiros__img">
            <img class="img_quadrada" src="img/Dell_logo.svg.png">
            <img class="img_quadrada" src="img/hp-logo.png">
            <img class="img_retangular" src="img/Microsoft-Logo-PNG.png">
            <img class="img_retangular" src="img/symantec.png">
        </div>
    </section>

    <footer class="footer">
        <div class="footer__inner">
            <div>
                <h3>Entre em contato</h3>
                <span>Fone: (11) 3090-3663</span>
                <span>Av. Eng. Armando de Arruda Pereira, 2937 - Jabaquara, São Paulo - SP, 04309-011</span>
            </div>
            <div>
                <h3>Portal Iniciados</h3>
                <a href="politica.html">Política de Privacidade</a>
            </div>
            <div>
                <h3>Redes Sociais</h3>
                <div class="redes__social">
                    <a href="https://www.facebook.com/Metrobyte"><img src="ico/facebook.png"></a>
                    <a href="https://www.instagram.com/metrobyte.oficial/"><img src="ico/instagram.png"></a>
                    <a href="https://www.linkedin.com/company/metrobyte"><img src="ico/linkedin.png"></a>
                    <a href="https://www.youtube.com/metrobyte"><img src="ico/youtube.png"></a>
                    <a href="https://www.metrobyte.com.br/blog/"><img src="ico/blogger.png"></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>