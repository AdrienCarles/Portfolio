<?php require('header-cv.php');?>

<div class="content" id="article1">
    <div class="parallax5">
        <div class="col-12">
            <h1 class="art-titre">Des pirates ont inventé une nouvelle technique d’attaque</h1>
        </div>
    </div>
</div>

<div class="container-fluid cv card">
    <div class="row row-art">
        <h4>Une nouvelle technique de piratage affecte Windows et est presque indétectable.</h4>
        <p>Des pirates ont utilisé un dropper de logiciel malveillant personnalisé pour implanter un malware sans fichier dans les journaux d’événements de Windows 11. Cela concerne les services de gestion des clés (KMS). C’est la première fois que cette technique est repérée dans la nature et elle inquiète. En effet, elle est conçue pour rendre le processus d’infection presque impossible à détecter. Et ce, jusqu’à ce qu’il soit trop tard.</p>
        <h4>Les pirates innovent</h4>
        <p>Les chercheurs en cybersécurité de Kaspersky ont repéré une nouvelle technique de piratage. Et ce, suite à un retour d’un client dont le terminal était infecté. La victime de cette attaque a été incitée à télécharger une archive RAR à partir d’un service de partage de fichiers légitime. Une fois téléchargée, elle s’exécute secrètement, et procède à l’infection. Selon les chercheurs, l’ensemble de la campagne est “très ciblée” et déploie un large éventail d’outils. Certains de ces derniers sont personnalisés, d’autres commerciaux.</p>
        <p>Une fois en action, cette attaque injecte des charges utiles de shellcode dans les journaux d’événements de Windows, dans les services de gestion des clés (KMS). Et ce, par l’intermédiaire d’un dropper de malware personnalisé qui rend l’attaque invisible. En clair, le shellcode a été chiffré, puis découpé en petits morceaux de 8 ko avant d’être éparpillé dans une partie des logs de Windows. Pour rappel, un shellcode est une séquence de code machine ou d’instructions exécutables injectée dans la mémoire d’un ordinateur. Et ce, dans le but de prendre le contrôle d’un programme en cours d’exécution.</p>
        <h4>Diviser pour mieux régner</h4>
        <p>Concrètement, le logiciel malveillant copie WerFault.exe dans le dossier C:³Windows³Tasks. À savoir que WerFault.exe est le véritable fichier de gestion des erreurs du système d’exploitation. Une fois cette manipulation effectuée, il ajoute une ressource binaire cryptée à Windows Error Reporting (Wer.dll) au même endroit. C’est grâce au détournement de l’ordre de recherche des exploits DLL que ce code malveillant s’introduit dans le système. Concrètement, le fichier DLL vérolé récupère les petits bouts du shellcode, les assemble à nouveau et exécute ensuite le code ainsi obtenu. Ainsi, même si l’utilisateur vérifie ses journaux d’événements, rien ne semblera sortir de l’ordinaire. L’attaquant pourra alors installer un virus en toute discrétion.</p>
        <p>La campagne de piratage aurait débuté en septembre 2021. Mais, comme elle ne présente aucune similitude avec les attaques précédentes enregistrées, il est probable qu’il s’agisse d’un tout nouvel acteur. Pour le moment, les chercheurs ont surnommé l’attaquant SilentBreak.</p>
    </div>
    <div class="row">
        <div class="col-6">
            <h4>Source</h4>
            <p>Cyber Reports (EN) par <a href="https://cyber-reports.com/2022/05/09/hackers-are-now-hiding-malware-in-windows-event-logs/">GFiuui45fg </a> le 09 Mai 2022</p>
        </div>
        <div class="col-6">
            <h4>Information complémentaires</h4>
            <p><a href="https://securelist.com/a-new-secret-stash-for-fileless-malware/106393/">Securelist</a></p>
            <p><a href="https://www.techopedia.com/definition/54/dropper">Techopedia</a></p>
        </div>
    </div>
</div>

<?php require('footer.php');?>