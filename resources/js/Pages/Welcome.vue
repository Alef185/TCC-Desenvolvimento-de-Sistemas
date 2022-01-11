<template>
    <Head title="EzOffice" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- teste header -->
    <section class="main" id="home">
        <header>  
            <div>
            <a href=""><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="80px" height="80px" viewBox="0 0 3819.000000 3106.000000"
                preserveAspectRatio="xMidYMid meet">
               
               <g transform="translate(0.000000,3106.000000) scale(0.100000,-0.100000)"
               fill="#000000" stroke="none">
               <path d="M26730 31040 c-1279 -90 -2422 -458 -3360 -1083 -254 -169 -421 -306
               -835 -683 -1122 -1023 -2098 -1992 -3134 -3114 -139 -151 -274 -295 -300 -320
               -25 -25 -152 -157 -281 -295 -426 -454 -1778 -1792 -1801 -1783 -8 4 -371 392
               -939 1004 -659 710 -901 965 -1210 1277 -935 947 -1466 1316 -2365 1646 -437
               160 -782 248 -1189 304 -141 19 -205 22 -521 21 -384 0 -459 -6 -752 -59 -702
               -129 -1362 -438 -1942 -909 -1018 -826 -1620 -2141 -1577 -3443 35 -1081 420
               -2033 1143 -2825 327 -358 777 -700 1198 -910 458 -230 983 -386 1525 -453
               175 -22 603 -31 782 -16 789 66 1431 321 2103 836 306 235 530 439 1236 1125
               178 173 434 421 569 550 532 510 1931 1830 1941 1830 6 0 224 -233 1487 -1584
               294 -314 553 -589 576 -611 23 -22 118 -121 212 -220 1429 -1520 2511 -2605
               3173 -3183 348 -304 621 -516 863 -666 251 -157 745 -400 1128 -554 1497 -602
               3041 -718 4544 -341 1096 274 2194 844 3056 1585 259 223 587 563 824 853
               1425 1747 1985 3926 1565 6095 -202 1045 -615 1999 -1248 2881 -593 827 -1424
               1580 -2296 2080 -922 529 -1938 852 -2995 951 -203 19 -976 28 -1180 14z m935
               -3040 c691 -64 1327 -287 1925 -675 397 -257 814 -645 1097 -1020 468 -621
               761 -1398 838 -2224 17 -190 20 -616 4 -796 -97 -1131 -732 -2294 -1614 -2955
               -669 -502 -1413 -812 -2195 -917 -194 -26 -737 -26 -930 0 -657 89 -1303 333
               -1796 680 -411 288 -1339 1145 -2229 2057 -751 770 -1346 1353 -1477 1448 -75
               53 -77 64 -26 125 318 387 1025 1163 1758 1932 376 394 566 599 770 830 92
               105 191 213 221 240 70 65 270 226 429 345 778 580 1633 892 2585 944 113 6
               521 -3 640 -14z"/>
               <path d="M10340 15094 c-238 -13 -446 -27 -580 -40 -2251 -209 -4378 -1124
               -6080 -2615 -1286 -1126 -2289 -2542 -2914 -4116 -405 -1018 -645 -2058 -731
               -3163 -11 -149 -34 -672 -35 -802 0 -17 180 -18 3635 -18 l3635 0 0 4620 0
               4620 3495 0 3495 0 0 -1095 0 -1095 -2090 0 -2090 0 0 -650 0 -650 1695 0
               1695 0 0 -1030 0 -1030 -1690 0 -1690 0 0 -242 c0 -134 -3 -476 -7 -760 l-6
               -518 2091 0 2092 0 0 -1085 0 -1085 1205 0 1205 0 0 158 c0 374 42 895 110
               1373 262 1831 1028 3621 2170 5069 74 94 139 177 144 185 12 17 -25 65 -221
               290 -638 729 -1357 1359 -2158 1890 -418 277 -702 442 -1145 664 -1289 645
               -2617 1003 -4120 1111 -143 11 -983 21 -1110 14z"/>
               <path d="M23916 13008 c-3 -299 -7 -779 -8 -1068 l-3 -525 1900 -5 1901 -5
               -2058 -2690 -2058 -2690 0 -857 0 -858 3860 0 3860 0 0 1080 0 1080 -2048 2
               -2049 3 1844 2435 c1014 1339 1904 2515 1978 2614 l135 178 -2 922 -3 921
               -3621 3 -3621 2 -7 -542z"/>
               </g>
               </svg></a>
               <!-- <span class="logoName">OFFICE</span> -->
            </div>   
                <ul class="navigation">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#equipe">Equipes</a></li>
                    <li><a href="#chat">Chat</a></li>
                    <li><a href="#tarefas">Tarefas</a></li>
                    <li><a href="#team">Sobre nós</a></li>

                    <div v-if="canLogin">
                        <Link v-if="$page.props.user" :href="route('dashboard')" class="btnHome" style="font-weight: 700; color: #3766DD;">
                            DashBoard
                        </Link>

                        <template v-else>
                            <Link :href="route('login')" class="btnHome" style="font-weight: 700; color: #3766DD;">
                                Entrar
                            </Link>

                            <Link v-if="canRegister" :href="route('register')" class="btnHome" style="font-weight: 700; color: #3766DD;">
                                Registrar
                            </Link>
                        </template>
                    </div>
                </ul>
        </header>
        <div class="content">
            <div class="text">
                <h2>Ez<i style="color: #3766DD;">Off</i>ice<br><span>Rápido, prático e fácil</span></h2>
                <p>A plataforma que se conecta diretamente aos seus objetivos, perfeita para quem busca praticidade, agilidade e conforto, contando com diversas ferramentas que te auxiliam no seu trabalho.</p>
                <a :href="route('login')" class="btn">Entrar</a>
                <a href="#tarefas" class="btn">saiba mais...</a>
            </div>
            <div class="divImg">
                <div class="divImg2">
                    <img src="https://i.ibb.co/74wC5qt/img1.png" alt="" class="img1">
                </div>
            </div>
        </div>

        <div class="footer">
            <ul class="sci">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            </ul>
        </div>
        <!-- teste header -->
    </section>
    <!-- section equipes start -->
    <section class="main" id="equipe">
        <div class="content">
            <div class="divImg">
                <div class="divImg2">
                    <img src="https://i.ibb.co/s9cPnMN/img2.png" alt="" class="img1">
                </div>
            </div>
            <div class="text" style="text-align: right;">
                <h2>Eq<i style="color: #3766DD;">ui</i>pes<br><span>Todos em um só lugar</span></h2>
                <p>Com esta ferramenta é possível criar e gerir sua equipe da melhor maneira, contando com diversas opções e funcionalidades, você também pode interagir com sua equipe através da ferramenta Chat.</p>
            </div>
        </div>
    </section>
    <!-- section equipes end -->
    <!-- section chat start -->
    <section class="main" id="chat">
        <div class="content">
            <div class="text">
                <h2>Ch<i style="color: #3766DD;">a</i>t<br><span>Um jeito simples de se comunicar</span></h2>
                <p>A ferramenta Chat foi feita com a intenção de unir a equipe e facilitar o trabalho compartilhado, auxiliando nas colaborações e troca de informações no seu Home Office.</p>
            </div>
            <div class="divImg">
                <div class="divImg2">
                    <img src="https://i.ibb.co/kXksTgh/img3.png" alt="" class="img1">
                </div>
            </div>
        </div>
    </section>
    <!-- section chat end -->
    <!-- section tarefas start -->
    <section class="main" id="tarefas">
        <div class="content">
            <div class="divImg">
                <div class="divImg2">
                    <img src="https://i.ibb.co/YD2xpRg/img4.png" alt="" class="img1">
                </div>
            </div>
            <div class="text" style="text-align: right;">
                <h2>Ta<i style="color: #3766DD;">ref</i>as<br><span>Organize sua rotina</span></h2>
                <p>Nosso objetivo é trazer a praticidade à sua rotina, com a ferramenta de tarefas será fácil se organizar e gerir seu dia a dia, sendo uma ótima forma de gerenciar suas atividades a serem realizadas.</p>
            </div>
        </div>
    </section>
    <section class="main" id="team">
        <h2 class="teamH2" style="text-align: center;">Nossa <i style="color: #3766DD;">Equipe</i><br><span class="teamSpan">Conheçam os desenvolvedores</span></h2>
        <div class="content">
            
            <!-- <div class="divImg">
                <div class="divImg2">
                    <img src="https://i.ibb.co/YD2xpRg/img4.png" alt="" class="img1">
                </div>
            </div>
            <div class="text" style="text-align: right;">
                <h2>Ta<i style="color: #3766DD;">ref</i>as<br><span>Um jeito simples de se comunicar</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consequatur tempore quos, ex dolore repudiandae iure facilis porro recusandae, quo non et reiciendis corrupti? Porro natus voluptates aliquam distinctio molestias?</p>
            </div> -->
            <!-- team start -->
            <!--1st member-->
                <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/XtYxq2q/Sem-T-tulo-3.jpg">
                                    </div>
                                    <h3 class="title">Laissa R. Almeida</h3>
                                    <span class="post">Designer UX, Analista de Sistemas</span>

                                    <!--social icon-->

                                </div>
                            </div>

                    <!--2nd member-->
                    
                            <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/cDn7WTr/Sem-T-tulo-1.jpg">
                                    </div>
                                    <h3 class="title">Isabella R. Lima</h3>
                                    <span class="post">Designer UI, Desenvolvedora BackEnd</span>

                                    <!--social Icon-->

                                </div>
                            </div>

                    <!--3rd member-->
                    
                            <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/H7PG7m4/fdfdfdsf.jpg">
                                    </div>
                                    <h3 class="title">- Álef de Souza Rosa -</h3>
                                    <span class="post">Desenvolvedor FullStack, Analista de Sistemas, Web Designer, Ilustrador</span>
                                    
                                    <!--social icon-->
                
                                </div>
                            </div>

                    <!--4th member-->

                            <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/stLPcBQ/Sem-T-tulo-4.jpg">
                                    </div>
                                    <h3 class="title">João P. C. S. Sedenho</h3>
                                    <span class="post">Desenvolvedor de Games, Cosplay de Pikachu</span>

                                    <!--social icon-->

                                </div>
                            </div>
                     <!--5th member-->

                            <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="https://i.ibb.co/ThN4JwM/Sem-T-tulo-2.jpg">
                                    </div>
                                    <h3 class="title">Pedro F. B. Teles</h3>
                                    <span class="post">Designer, Analista de Sistemas</span>

                                    <!--social icon-->

                                </div>
                            </div>
            <!-- team end -->
        </div>
    </section>
    
    <!-- section tarefas end -->
    <!-- footer start -->
    <footer id="footer" class="footer-1 bg-gray-100 py-8 sm:py-12">
  <div class="container mx-auto px-4">
    <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
        <h5 class="text-xl font-bold mb-6">Novidades</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800" disabled>Design Repaginado</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800" disabled>Nova plataforma</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800" disabled>Opções de API Token</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800" disabled>Autenticação de dois fatores</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800" disabled>Mais em breve...</a>
          </li>
        </ul>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
        <h5 class="text-xl font-bold mb-6">Recursos</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="#equipe" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Equipes</a>
          </li>
          <li class="mb-2">
            <a href="#chat" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Chat</a>
          </li>
          <li class="mb-2">
            <a href="#tarefas" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tarefas</a>
          </li>
          <li class="mb-2">
            <a href="#notes" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Bloco de Anotações</a>
          </li>
        </ul>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
        <h5 class="text-xl font-bold mb-6">Sobre</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="#team" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Nosso time</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Localização</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacidade</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Termos</a>
          </li>
        </ul>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
        <h5 class="text-xl font-bold mb-6">Ajuda</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Suporte</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Centro de ajuda</a>
          </li>
          <li class="mb-2">
            <a href="#footer" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Entre em contato</a>
          </li>
        </ul>
      </div>
      <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
        <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">Permaneça conectado</h5>
        <div class="flex sm:justify-center xl:justify-start">
          <a href="#footer" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#footer" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#footer" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
      <div class="sm:w-full px-4 md:w-1/6">
        <!-- <strong>EzOffice</strong> -->
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="90px" height="90px" viewBox="0 0 3819.000000 3106.000000"
                preserveAspectRatio="xMidYMid meet">
               <g transform="translate(0.000000,3106.000000) scale(0.100000,-0.100000)"
               fill="#000000" stroke="none">
               <path d="M26730 31040 c-1279 -90 -2422 -458 -3360 -1083 -254 -169 -421 -306
               -835 -683 -1122 -1023 -2098 -1992 -3134 -3114 -139 -151 -274 -295 -300 -320
               -25 -25 -152 -157 -281 -295 -426 -454 -1778 -1792 -1801 -1783 -8 4 -371 392
               -939 1004 -659 710 -901 965 -1210 1277 -935 947 -1466 1316 -2365 1646 -437
               160 -782 248 -1189 304 -141 19 -205 22 -521 21 -384 0 -459 -6 -752 -59 -702
               -129 -1362 -438 -1942 -909 -1018 -826 -1620 -2141 -1577 -3443 35 -1081 420
               -2033 1143 -2825 327 -358 777 -700 1198 -910 458 -230 983 -386 1525 -453
               175 -22 603 -31 782 -16 789 66 1431 321 2103 836 306 235 530 439 1236 1125
               178 173 434 421 569 550 532 510 1931 1830 1941 1830 6 0 224 -233 1487 -1584
               294 -314 553 -589 576 -611 23 -22 118 -121 212 -220 1429 -1520 2511 -2605
               3173 -3183 348 -304 621 -516 863 -666 251 -157 745 -400 1128 -554 1497 -602
               3041 -718 4544 -341 1096 274 2194 844 3056 1585 259 223 587 563 824 853
               1425 1747 1985 3926 1565 6095 -202 1045 -615 1999 -1248 2881 -593 827 -1424
               1580 -2296 2080 -922 529 -1938 852 -2995 951 -203 19 -976 28 -1180 14z m935
               -3040 c691 -64 1327 -287 1925 -675 397 -257 814 -645 1097 -1020 468 -621
               761 -1398 838 -2224 17 -190 20 -616 4 -796 -97 -1131 -732 -2294 -1614 -2955
               -669 -502 -1413 -812 -2195 -917 -194 -26 -737 -26 -930 0 -657 89 -1303 333
               -1796 680 -411 288 -1339 1145 -2229 2057 -751 770 -1346 1353 -1477 1448 -75
               53 -77 64 -26 125 318 387 1025 1163 1758 1932 376 394 566 599 770 830 92
               105 191 213 221 240 70 65 270 226 429 345 778 580 1633 892 2585 944 113 6
               521 -3 640 -14z"/>
               <path d="M10340 15094 c-238 -13 -446 -27 -580 -40 -2251 -209 -4378 -1124
               -6080 -2615 -1286 -1126 -2289 -2542 -2914 -4116 -405 -1018 -645 -2058 -731
               -3163 -11 -149 -34 -672 -35 -802 0 -17 180 -18 3635 -18 l3635 0 0 4620 0
               4620 3495 0 3495 0 0 -1095 0 -1095 -2090 0 -2090 0 0 -650 0 -650 1695 0
               1695 0 0 -1030 0 -1030 -1690 0 -1690 0 0 -242 c0 -134 -3 -476 -7 -760 l-6
               -518 2091 0 2092 0 0 -1085 0 -1085 1205 0 1205 0 0 158 c0 374 42 895 110
               1373 262 1831 1028 3621 2170 5069 74 94 139 177 144 185 12 17 -25 65 -221
               290 -638 729 -1357 1359 -2158 1890 -418 277 -702 442 -1145 664 -1289 645
               -2617 1003 -4120 1111 -143 11 -983 21 -1110 14z"/>
               <path d="M23916 13008 c-3 -299 -7 -779 -8 -1068 l-3 -525 1900 -5 1901 -5
               -2058 -2690 -2058 -2690 0 -857 0 -858 3860 0 3860 0 0 1080 0 1080 -2048 2
               -2049 3 1844 2435 c1014 1339 1904 2515 1978 2614 l135 178 -2 922 -3 921
               -3621 3 -3621 2 -7 -542z"/>
               </g>
               </svg>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
        <h6 class="font-bold mb-2">Endereço</h6>
        <address class="not-italic mb-4 text-sm">
          Araraquara, 14800-000<br>
          São Paulo, Brasil.
        </address>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
        <h6 class="font-bold mb-2">TCC - EzOffice®️</h6>
        <p class="mb-4 text-sm">Projeto feito para <strong> TCC</strong>.<br>
          <em>(Trabalho de Conclusão de Curso)</em></p>
      </div>
      <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
        <button class="px-4 py-2 bg-blue-700 hover:bg-blue-900 rounded text-white"><a :href="route('login')">Vamos lá?</a></button>
      </div>
    </div>
  </div>
</footer>
    <!-- footer end -->
</template>

<!-- teste header -->
<style scoped>
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    background: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.178);
}
.navigation{
    display: flex;
}
.navigation li{
    list-style: none;
}
.navigation li a, .btnHome{
    position: relative;
    text-decoration: none;
    margin-left: 40px;
    transition: 0.25s;
}
.navigation li a:hover, .btnHome:hover{
    letter-spacing: 2px;
    color: rgb(60, 123, 240);
}

/* teste */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}
.main{
    position: relative;
    min-height: 100vh;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 100px;
}
.logo{
    max-width: 90px;
}
.logoName{
    font-size: 1.8em;
    font-weight: 800;
    color: black;
    position: relative;
    top: -17px;
}
.content{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.content .text{
    width: 100%;
    max-width: 600px;
}
.content .text h2{
    color: #222629;
    font-size: 5em;
    font-weight: 700;
    line-height: 50px;
}
.content .text h2 span{
    color: rgb(82, 82, 82);
    font-size: 0.5em;
    font-weight: 200;
}
.content .text p{
    color: rgb(80, 80, 80);
    font-weight: 500;
    font-size: 1.1em;
    line-height: 1.5em;
    margin: 20px 0;
}
.btn{
    position: relative;
    display: inline-block;
    padding: 10px 40px;
    background: #3766DD;
    color: #fff;
    font-size: 1.1em;
    font-weight: 500;
    border-radius: 40px;
    text-decoration: none;
    transition: 0.5s;
    margin-right: 10px;
    border: 2px solid #3766DD;
}
.btn:nth-last-child(1){
    background: #5d89f800;
    border: 2px solid #3766DD;
    color: #3766DD;
}
.btn:nth-last-child(1):hover{
    background: #3766DD;
    color: #fff;
}
.btn:hover{
    letter-spacing: 2px;
    background: #5d89f800;
    border: 2px solid #3766DD;
    color: #3766DD;
    font-weight: 700;
}
.divImg{
    position: relative;
}
.divImg2{
   display: block; 
}
.img1{
    width: 100%;
    max-width: 600px;
}
.footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    display: flex;
    padding: 30px 100px;
    justify-content: space-between;
    align-items: flex-end;
}
.sci{
    display: flex;
}
.sci li{
    list-style: none;
}
.sci li a{
    color: black;
    font-size: 2em;
    margin-right: 20px;
    display: inline-block;
    transition: 0.25s;
}
.sci li a:hover{
    transform: translateY(-5px);
}
/* responsive design */
@media (max-width:991px)
{
    .main{
        padding: 40px;
    }
    header{
        padding: 20px 40px;
    }
    .logo
    {
        max-width: 70px;
    }
    .content{
        flex-direction: column;
        margin-top: 120px 0 40px;
        padding-top: 100px;
    }
    .content .text{
        max-width: 100%;
    }
    .content .text h2{
        font-size: 4em;
    }
    .divImg{
        margin-top: 40px;
        padding-top: 50px;
    }
    .img1 {
        width: 100%;
        max-width: 420px;
    }
    .sci{
        display: none;
    }
}
/* teste team */
.teamH2{
    color: #222629;
    font-size: 5em;
    font-weight: 700;
    line-height: 50px;
}
.teamSpan{
    color: rgb(82, 82, 82);
    font-size: 0.5em;
    font-weight: 200;
}
 .our-team{
    border-radius: 15px;
    text-align: center;
    padding: 20px 15px 30px;
    margin: 10px;
    background: #e0e0e0;
    transition: 0.5s;
background: #ffffff;
box-shadow:  7px 7px 14px #cfcfcf,
             -7px -7px 14px #ffffff,
             -7px 7px 14px #cfcfcf,
             7px -7px 14px #ffffff;
}
.our-team .pic{
    background: #fff;
    padding: 10px;
    margin-bottom: 25px;
    display: inline-block;
    width: 100%;
    height: 100%;
    transition: all 0.5s ease 0s;
}
.our-team:hover .pic{
    background: #3766DD;
    border-radius: 50%;
}
.our-team:hover{
}
.pic img{
    width: 100%;
    height: auto;
    border-radius: 50%;
}
.our-team:hover .title{
    color: #3766DD;
}
.our-team:hover .post{
    color: #2e282a;
}
.our-team .title{
    font-weight: 600;
    color: #2e282a;
    text-transform: uppercase;
    display: block;
    font-size: 20px;
    margin: 0 0 7px 0;
    transition: 0.5s;
    cursor: default;
}
.our-team .post{
    color: #3766DD;
    display: block;
    font-size: 15px;
    margin-bottom: 15px;
    transition: 0.5s;
    cursor: default;
}
/* team end */
/* footer start */

/* footer end */
</style>
<script>
    

    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>
