<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>Portfólio</title>
  </head>
  <body>

    <div class="container">

        <div class="hamburguer">
          <div class="line" id="line1"></div>
          <div class="line" id="line2"></div>
          <div class="line" id="line3"></div>
          <span>fechar</span>
        </div>  

        <header id="home">
            <div class="img-wrapper">
                <img src="imagens/bg.jpg" alt="">
            </div>
            <div class="banner">
                <h1>YouTuber Programador & Designer</h1>
                <p>darkziin</p>
                <button>Desça pra baixo</button>
            </div>
        </header>

        <aside class="sidebar">
          <nav>
            <ul class="menu">
              <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
              <li class="menu-item"><a href="#conhecimentos" class="menu-link">Conhecimento</a></li>
              <li class="menu-item"><a href="#projetos" class="menu-link">Projetos</a></li>
              <li class="menu-item"><a href="#contato" class="menu-link">Contato</a></li>
              <li class="menu-item"><a href="#orcamento" class="menu-link">Orçamento</a></li>
            </ul>
          </nav>
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-github-alt"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </aside>

        <section class="sessao-conhecimentos" id="conhecimentos">
          <div class="sessao-header">
            <h1>Conhecimentos</h1>
          </div>
          <div class="conhecimentos">
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fab fa-html5"></i>
                <h3>HTML</h3>
              </div>
              <div class="conhecimento-text">
                <p>php</p>
              </div>
            </div>
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fab fa-css3-alt"></i>
                <h3>CSS</h3>
              </div>
              <div class="conhecimento-text">
                <p>java script.</p>
              </div>
            </div>
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fas fa-pencil-alt"></i>
                <h3>Design</h3>
              </div>
              <div class="conhecimento-text">
                <p>kkkkkkkkkk?</p>
              </div>
            </div>
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fab fa-js"></i>
                <h3>Javascript</h3>
              </div>
              <div class="conhecimento-text">
                <p>Ja é inscrito?
                </p>
              </div>
            </div>
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fab fa-bootstrap"></i>
                <h3>Boostrap</h3>
              </div>
              <div class="conhecimento-text">
                <p>dark</p>
              </div>
            </div>
            <div class="conhecimento">
              <div class="conhecimento-header">
                <i class="fab fa-github"></i>
                <h3>Git e GitHub</h3>
              </div>
              <div class="conhecimento-text">
                <p>darkzin</p>
              </div>
            </div>
            <div class="conhecimentos-img-wrapper">
              <img src="imagens/conhecimentos.png" alt="imagem conhecimento">
            </div>
          </div>
        </section>

        <div class="sessao-projetos" id="projetos">
          <div class="sessao-header">
            <h1>Projetos</h1>
          </div>
          <div class="projetos">
            <div class="card">
              <div class="card-img-wrapper">
                <img src="imagens/proj1.jpg" alt="imagem do projeto ToDo" />
              </div>
              <div class="card-info">
                <h2>ToDo List</h2>
                <h3>Javascript</h3>
                <p>apikeys</p>
                <button class="btn">Saiba Mais</button>
              </div>
            </div>
            <div class="card">
              <div class="card-img-wrapper">
                <img src="imagens/proj2.jpg" alt="imagem do projeto Maratona" />
              </div>
              <div class="card-info">
                <h2>Maratona</h2>
                <h3>HTML, CSS</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, vero aliquam? Pariatur libero voluptas ipsam ullam consectetur ab facilis cumque.</p>
                <button class="btn">Saiba Mais</button>
              </div>
            </div>
            <div class="card">
              <div class="card-img-wrapper">
                <img src="imagens/proj3.jpg" alt="imagem do projeto Casa Bela" />
              </div>
              <div class="card-info">
                <h2>Casa Bela</h2>
                <h3>HTML</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est pariatur soluta doloremque tempore nisi placeat, eveniet voluptate recusandae. Eius, sapiente?</p>
                <button class="btn">Saiba Mais</button>
              </div>
            </div>
          </div>

        </section>

        <section class="sessao-contato" id="contato">
          <div class="contato-wrapper">
            <div class="contato-left"></div>
            <div class="contato-right">
              <h1>Contato</h1>
              <form>
                <div class="input-group">
                  <input type="text" class="field" id="nome">
                  <label for="nome" class="field-label">Nome</label>
                </div>
                <div class="input-group">
                  <input type="text" class="field" id="email">
                  <label for="email" class="field-label">E-mail</label>
                </div>
                <div class="input-group">
                  <textarea class="field" id="mensagem"></textarea>
                  <label for="mensagem" class="field-label">Mensagem</label>
                </div>
                <button type="submit" class="btn btn-submit">Enviar</button>
              </form>
            </div>
          </div>
        </section>

        <section class="sessao-orcamento" id="orcamento">
          <div class="orcamento-wrapper">
            <h1>Faça um orçamento</h1>
            <form>
              <label for="qtde">Qtde de Páginas</label>
              <input type="number" min="1" name="qtde" id="qtde">
              <label for="js">Preciso de um script JS</label>
              <input type="checkbox" name="js" id="js">
              <label>Layout</label>
              <div class="group-layout">
                <div>
                  <input type="radio" name="layout" id="layout-sim">
                  <label for="layout-sim">Preciso de um layout</label>
                </div>
                <div>
                  <input type="radio" name="layout" id="layout-nao">
                  <label for="layout-nao">Já tenho um layout</label>
                </div>
              </div>
              <label for="prazo">Prazo</label>
              <input type="range" name="prazo" id="prazo" min="1" max="10">
              <label id="preco">R$ 0,00</label>
              <button class="btn btn-orcamento" type="submit">Enviar</button>
            </form>
          </div>
        </section>

        <footer>
          <div class="footer-content">
            <p>
              Copyright &copy; 2020, ETECIA DS - Todos os diretos reservados
            </p>
            <div class="social-list">
              <ul>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
        <a href="#home" id="link-topo">
          <i class="fas fa-arrow-up"></i>
        </a>
    </div>
   </body>

   <script src="script.js"></script>
</html>
