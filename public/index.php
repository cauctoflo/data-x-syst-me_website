<?php 
include_once 'public/back-end/JsonClass.php';
// Fetch data from JSON file
$data = lireFichierJSON('public/back-end/data/fr.json');
// Render the HTML template with the fetched data
// echo json_encode($data);


?>



<!doctype html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../src/output.css" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <style>
         .gradientColor {
         background: linear-gradient(to right,#645FCE,#40356F);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         }
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
         .poppins {
         font-family: 'Poppins', sans-serif !important;
         }
      </style>
   </head>
   <body class="bg-neutral-900 max-w-screen  mx-auto">
      <nav class="z-10 bg-neutral-900  w-screen flex top-[0] fixed  h-32 items-center justify-center" style="backdrop-filter: blur(35px);">
         <div class="grid grid-cols-2 gap-10 " id="gauche_navbar">
            <ul class="text-xl text-white hover:text-[#40356F]"><a href="#">Qui sommes nous ?</a></ul>
            <ul class="text-xl text-white hover:text-[#40356F]"><a href="#contact">Nous contactés</a></ul>
         </div>
         <div class="justify-center items-center w-56 overflow-hidden">
            <div class=" ml-6 ">
               <img src="../assets/img/logo.png" class="h-16 w-auto" alt="">
            </div>
            <h1 class="text-xl text-white nunito"><?php  echo $data['Nom']; ?></h1>
         </div>
         <div class="grid grid-cols-2 gap-10  " id="droite_navbar">
            <ul class="text-xl text-white hover:text-[#40356F]"><a href="#">Nos partenaires</a></ul>
            <ul class="text-xl text-white hover:text-[#40356F]"><a href="#footer">En savoir plus</a></ul>
         </div>
      </nav>
      <div class=" h-[20rem] text-center"></div>
      <h1 class="text-white mb-4 text-[4rem] font-bold tracking-tight leading-none text-center">
         <span class="gradientColor"><?php  echo $data['Nom']; ?> </span>  
      </h1>
      <p class="w-[32rem] mx-auto text-white text-mb mt-4 text-center">
      <?php echo $data['sousnav'][0]['description']; ?>

       </p>
      <div class=" mx-auto flex items-center justify-center">
         <button class="bg-gradient-to-r from-[#645FCE] to-[#40356F] hover:from-[#40356F] hover:to-[#645FCE] text-white py-2 px-4 rounded-md mt-4 transition duration-300 ease-in-out">
         Ajouter le bot
         </button>
      </div>
      </div>


      <div class="mt-64 bg-white ">
         <div class="-z-1 pt-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex felx-col items-center justify-center">
               <span
                  class="rounded-full bg-indigo-500 px-2 py-1 text-white uppercase text-sm"
                  >
               <?php  echo $data['Nom']; ?>
               </span>
            </div>
            <div class="border-b-4 border-[#40356F] w-[24rem] mx-auto mb-10">
               <h1 class="font-bold text-4xl uppercase mb-7 relative text-center text-gray-700 poppins">
               <?php echo $data['FonctionnalitéTitle']; ?>
            </h1>
            </div>
         </div>
         <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 max-w-[20rem] md:max-w-full gap-8">


               <div class="p-8 hover:bg-indigo-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out" 
                data-aos="fade-right"
                data-aos-easing="linear"
               data-aos-duration="300">
               
                  <div
                     class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl"
                     >
                     <div class="w-8 h-8">
                        <img src="../assets/img/portable.png" alt="">
                     </div>
                  </div>
                  <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
                  <?php echo $data['Fonctionnalité']['1']['title']; ?>
                  </h2>
                  <p class="font-light text-sm text-gray-500 mb-3">
                  <?php echo $data['Fonctionnalité']['1']['Description']; ?>                  
               </p>
                  <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/">
                  <?php echo $data['Fonctionnalité']["1"]['Bouton']; ?>
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        >
                        <path
                           fill-rule="evenodd"
                           d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                           clip-rule="evenodd"
                           />
                     </svg>
                  </a>
               </div>
               <div class="p-8 hover:bg-green-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
               data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="300">
                  <div
                     class="bg-green-100 rounded-full w-16 h-16 flex justify-center items-center text-green-500 shadow-2xl"
                     >
                     <div class="w-8 h-8">
                        <img src="../assets/img/portable.png" alt="">
                     </div>
                  </div>
                  <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
                  <?php echo $data['Fonctionnalité']['2']['title']; ?>
                  </h2>
                  <p class="font-light text-sm text-gray-500 mb-3">
                  <?php echo $data['Fonctionnalité']['2']['Description']; ?>                  </p>
                  <a class="text-green-500 flex items-center hover:text-green-600" href="/">
                  <?php echo $data['Fonctionnalité']['2']['Bouton']; ?>
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        >
                        <path
                           fill-rule="evenodd"
                           d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                           clip-rule="evenodd"
                           />
                     </svg>
                  </a>
               </div>
               <div class="p-8 hover:bg-red-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out"               
               data-aos="fade-left"
               data-aos-easing="linear"
               data-aos-duration="300">
                  <div
                     class="bg-red-100 rounded-full w-16 h-16 flex justify-center items-center text-red-500 shadow-2xl"
                     >
                     <div class="w-8 h-8">
                        <img src="../assets/img/portable.png" alt="">
                     </div>
                  </div>
                  <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
                     <?php echo $data['Fonctionnalité']['3']['title']; ?>
                  </h2>
                  <p class="font-light text-sm text-gray-500 mb-3">
                  <?php echo $data['Fonctionnalité']['3']['Description']; ?>                  </p>
                  <a class="text-red-500 flex items-center hover:text-red-600" href="/">
                  <?php echo $data['Fonctionnalité']['3']['Bouton']; ?>
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        >
                        <path
                           fill-rule="evenodd"
                           d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                           clip-rule="evenodd"
                           />
                     </svg>
                  </a>
               </div>
            </div>
         
         
         <div class="grid grid-cols-1 md:grid-cols-3 max-w-[12rem] md:max-w-full gap-8">
            <div class="p-8 hover:bg-indigo-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out"               
            data-aos="fade-right"
            data-aos-easing="linear"
            data-aos-duration="300">
               <div
                  class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl"
                  >
                  <div class="w-8 h-8">
                     <img src="../assets/img/portable.png" alt="">
                  </div>
               </div>
               <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
               <?php echo $data['Fonctionnalité']['4']['title']; ?>
               </h2>
               <p class="font-light text-sm text-gray-500 mb-3">
               <?php echo $data['Fonctionnalité']['4']['Description']; ?>               </p>
               <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/">
               <?php echo $data['Fonctionnalité']['4']['Bouton']; ?>
                  <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                     >
                     <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        />
                  </svg>
               </a>
            </div>
            <div class="p-8 hover:bg-green-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="300">
               <div
                  class="bg-green-100 rounded-full w-16 h-16 flex justify-center items-center text-green-500 shadow-2xl"
                  >
                  <div class="w-8 h-8">
                     <img src="../assets/img/portable.png" alt="">
                  </div>
               </div>
               <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
               <?php echo $data['Fonctionnalité']['5']['title']; ?>
               </h2>
               <p class="font-light text-sm text-gray-500 mb-3">
               <?php echo $data['Fonctionnalité']['5']['Description']; ?>               </p>
               <a class="text-green-500 flex items-center hover:text-green-600" href="/">
               <?php echo $data['Fonctionnalité']['5']['Bouton']; ?>
                  <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                     >
                     <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        />
                  </svg>
               </a>
            </div>
            <div class="p-8 hover:bg-red-100  hover:cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            data-aos="fade-left"
            data-aos-easing="linear"
            data-aos-duration="300">
               <div
                  class="bg-red-100 rounded-full w-16 h-16 flex justify-center items-center text-red-500 shadow-2xl"
                  >
                  <div class="w-8 h-8">
                     <img src="../assets/img/portable.png" alt="">
                  </div>
               </div>
               <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3">
               <?php echo $data['Fonctionnalité']['6']['title']; ?>
               </h2>
               <p class="font-light text-sm text-gray-500 mb-3">
               <?php echo $data['Fonctionnalité']['6']['Description']; ?>    
                       </p>
               <a class="text-red-500 flex items-center hover:text-red-600" href="/">
               <?php echo $data['Fonctionnalité']['6']['Bouton']; ?>
                  <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                     >
                     <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        />
                  </svg>
               </a>
            </div>
         </div>
        </div>
      </div>
      <div class="bg-white h-32"></div>
      <div class="bg-neutral-900  p-8 rounded-lg">
        <div class="h-auto">
            <div class="grid grid-cols-4 mt-10">
                <div class="text-center">
                    <h1 class="text-5xl hover:text-indigo-500 cursor-pointer text-white poppins font-bold"> <a href="https://discord.com/oauth2/authorize?client_id=1107957516039630940"><p id="compteurServer">0</p></a> </h1>
                    <span class="rounded-full bg-indigo-500 px-2 py-1 text-white uppercase text-md">
                    Serveurs
                    </span>
                </div>                
                <div class="text-center">
                    <h1 class="text-5xl hover:text-red-500 cursor-pointer  text-white poppins font-bold"><a href="https://discord.com/oauth2/authorize?client_id=1107957516039630940"><p id="compteurUser">0</p></a></h1>
                    <span class="rounded-full bg-red-500 px-2 py-1 text-white uppercase text-md">
                        Utilisateurs
                        </span>
                </div>                
                <div class="text-center">
                    <h1 class="text-5xl hover:text-green-500 cursor-pointer text-white poppins font-bold"><a href="/partner"><p id="compteurPartner">0</p></a> </h1>
                    <span class="rounded-full bg-green-500 px-2 py-1 text-white uppercase text-md">
                        Partenaire
                        </span>
                </div>                
                <div class="text-center">
                    <h1 class="text-5xl hover:text-pink-500 cursor-pointer text-white poppins font-bold"><a href="http://zpoq.fr/data-x-systeme"><p id="compteurAnalyste">0</p></a> </h1>
                    <span class="rounded-full bg-pink-500 px-2 py-1 text-white uppercase text-md">
                        Data-X Analyste
                        </span>
                </div>

            </div>
        </div>

      </div>
      <div class="bg-white h-[8rem]" id="contact"></div>
      <div class="bg-white p-8 rounded-lg shadow-md"  >
        <div  class="my-6" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
            <div class="grid sm:grid-cols-2 items-center gap-16 p-8 mx-auto max-w-4xl bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md text-[#333] font-[sans-serif]">
                <div>
                    <h1 class="text-3xl font-extrabold">Nous contactés</h1>
                    <p class="text-sm text-gray-400 mt-3">Vous avez une grande idée ou une marque à développer et vous avez besoin d'aide ? N'hésitez pas à nous contacter, nous serions ravis d'entendre parler de votre projet et de vous aider.</p>
                    <div class="mt-12">
                        <h2 class="text-lg font-extrabold">Email</h2>
                        <ul class="mt-3">
                            <li class="flex items-center">
                                <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#40356F'
                                        viewBox="0 0 479.058 479.058">
                                        <path
                                            d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                            data-original="#000000" />
                                    </svg>
                                </div>
                                <a target="blank" href="https://datax-système.fr/email" class="text-[#40356F] text-sm ml-3">
                                    <small class="block">EMAIL</small>
                                    <strong>https://datax-système.fr/email</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12">
                        <h2 class="text-lg font-extrabold">Réseaux Sociaux</h2>
                        <ul class="flex mt-3 space-x-4">
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#40356F'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#40356F'
                                        viewBox="0 0 511 512">
                                        <path
                                            d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#40356F'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
              
                <form action="/contact/save" method="post" class="ml-auo space-y-4">
                    <input type='text' name ="pseudo" placeholder='pseudo'
                        class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#40356F]" />
                    <input type='email' 
                           name='email'
                           placeholder='Email'
                        class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#40356F]" />
                    <input type='text' placeholder='Sujet'
name='subject'                         class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#40356F]" />
                    <textarea placeholder='Message' rows="6"
                              name='message'
                        class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#40356F]"></textarea>
                    <button type='button' type="submit"
                        class="text-white bg-gradient-to-r from-[#645FCE] to-[#40356F] font-semibold rounded-md text-sm px-4 py-2.5 w-full">Envoyer</button>
                </form>
            </div>
        </div>

      </div>
<footer class="text-white">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
          <div class="sm:col-span-2">
            <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
              <img src="../assets/img/logo.png" class="w-10" alt="">
              <span class="ml-2 text-xl font-bold tracking-wide text-[#40356F] uppercase"><?php  echo $data['Nom']; ?></span>
            </a>
            <div class="mt-6 lg:max-w-sm">
              <p class="text-sm text-gray-400">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
              </p>
              <p class="mt-4 text-sm text-gray-400">
                Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>
          <div class="space-y-2 text-sm">
            <p class="text-base font-bold tracking-wide text-white">Contacts</p>
            <div class="flex">
              <p class="mr-1 text-gray-400">Email:</p>
              <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-[#40356F]">info@lorem.mail</a>
            </div>
            <div class="flex">
              <p class="mr-1 text-gray-400">Discord:</p>
              <a href="http://zpoq.fr/data-x-systeme" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors hover:text-[#40356F] duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                zpoq.fr/data-x-systeme
              </a>
            </div>
          </div>
          <div>
            <span class="text-base font-bold tracking-wide text-white">Réseaux Sociaux</span>
            <div class="flex items-center mt-1 space-x-3">
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path
                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                  ></path>
                </svg>
              </a>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                  <circle cx="15" cy="15" r="4"></circle>
                  <path
                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                  ></path>
                </svg>
              </a>
              <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path
                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                  ></path>
                </svg>
              </a>
            </div>
            <p class="mt-4 text-sm text-gray-500">
              Bacon ipsum dolor amet short ribs pig sausage prosciutto chicken spare ribs salami.
            </p>
          </div>
        </div>
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
          <p class="text-sm text-gray-600">
            © Copyright 2024 <?php  echo $data['Nom']; ?>. All rights reserved.
          </p>
          <p class="text-sm text-gray-600">
            <a href="https://github.com/cauctoflo">
                Développer par Florentin Dev
            </a>
            
          </p>
          <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
            <li>
              <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
            </li>
            <li>
              <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy Policy</a>
            </li>
            <li>
              <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms &amp; Conditions</a>
            </li>
          </ul>
        </div>
      </div>
      
</footer>
      
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    <script>
        function serveursCount() {
            var n = <?php echo $data['Stats']['Servers']; ?>; // Nombre final du compteur
            var cpt = 0; // Initialisation du compteur
            var duree = 3; // Durée en seconde pendant laquel le compteur ira de 0 à 15 (divisée par 10)
            var delta = Math.ceil((duree * 1000) / n);
            var node = document.getElementById("compteurServer");

            function countdown() {
                node.innerHTML = ++cpt;
                if (cpt < n) {
                    // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
                    setTimeout(countdown, delta);
                }
            }

            countdown(); // Lancement du compteur au chargement de la page
        }
        function usersCount() {
            var n = <?php echo $data['Stats']['Users']; ?>; // Nombre final du compteur
            var cpt = 0; // Initialisation du compteur
            var duree = 0.00002; // Durée en seconde pendant laquel le compteur ira de 0 à 15 (divisée par 10)
            var delta = Math.ceil((duree * 1000) / n);
            var node = document.getElementById("compteurUser");

            function countdown() {
            node.innerHTML = cpt += 10;
            if (cpt < n) {
                // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
                setTimeout(countdown, delta);
            }
            }

            countdown(); // Lancement du compteur au chargement de la page
        }
        function partnerCount() {
            var n = <?php echo $data['Stats']['Partners']; ?>; // Nombre final du compteur
            var cpt = 0; // Initialisation du compteur
            var duree = 0.09; // Durée en seconde pendant laquel le compteur ira de 0 à 15 (divisée par 10)
            var delta = Math.ceil((duree * 1000) / n);
            var node = document.getElementById("compteurPartner");

            function countdown() {
            if (cpt < n) {
                node.innerHTML = (cpt += 0.1).toFixed(1);
                // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
                setTimeout(countdown, delta);
            } else {
                node.innerHTML = Math.round(cpt);
            }
            }

            countdown(); // Lancement du compteur au chargement de la page
        }
        function analysteCount() {
            var n = <?php echo $data['Stats']['Analysts']; ?>; // Nombre final du compteur
            var cpt = 0; // Initialisation du compteur
            var duree = 0.09; // Durée en seconde pendant laquel le compteur ira de 0 à 15 (divisée par 10)
            var delta = Math.ceil((duree * 1000) / n);
            var node = document.getElementById("compteurAnalyste");

            function countdown() {
            if (cpt < n) {
                node.innerHTML = (cpt += 0.1).toFixed(1);
                // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
                setTimeout(countdown, delta);
            } else {
                node.innerHTML = Math.round(cpt);
            }
            }

            countdown(); // Lancement du compteur au chargement de la page
        }
        var hasExecuted = false;

        window.addEventListener('scroll', function() {
            var element = document.getElementById('compteurServer');
            var elementPosition = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;

            if (elementPosition < windowHeight && !hasExecuted) {
            serveursCount();
            usersCount();
            partnerCount();
            analysteCount();
            hasExecuted = true;
            }
        });

        
    </script>

   </body>
</html>