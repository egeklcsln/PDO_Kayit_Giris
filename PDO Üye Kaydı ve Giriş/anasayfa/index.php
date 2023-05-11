<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type ='text/css'href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossrigin="anonymous">
    
</head>
<body>
    <nav>
        <div class="heading">
            <span>Ege Kılıçaslan</span>
        </div>
        <ul> 
            <li><a href="#ev">Ev</a></li>
            <li><a href="#hakkimda">Hakkımda</a></li>
            <li><a href="#projeler">Projeler</a></li>
            <li><a href="#iletisim">İletişim</a></li>
            <li><a href="../cikis.php">Çıkış</a></li>
        </ul>
    </nav>
    <main>
        <section id="ev" style="--color:#0c0f16;"></section>
        <section id="hakkimda" style="--color:#ffab0e;"></section>
        <section id="projeler" style="--color:#ff1576;"></section>
        <section id="iletisim" style="--color:#b700ff;"></section>
        
        
    </main>
    <script type="text/javascript">
        const sections= [...document.querySelectorAll('section')];
        const link=(id)=> document.querySelector('a[href="#${ id }"]');
        const inView =(element)=>{
            var top = element.offsetTop;
            var height = element.offsetHeight;
            while(element.offsetParent){
                element = element.offsetParent;
                top += element.offsetTop;
            }
            return(
                top<(window.pageYOffset + window.innerHeight)&&
                (top + height )>window.pageYOffset
            );
        };

        const init =() => {
            function update(){
                let next = false;
                sections.forEach(section => {
                    const current = link(section.id);
                    if(inView(section) && !next){
                        current.classList.add('current');
                        next=true;
                    }else {
                        current.classList.remove('current');
                    }
                
            });
        }
        update();
        window.addEventListener('scroll',update);
     }
     init();
    </script>
    
</body>
</html>