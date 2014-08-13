<?php $seminar = ''; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=500px, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::to('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="{{URL::to('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div class="inside">
                <header class="menu menu-white">
                    <nav>
                        <ul class="menu-ul">
                            <li class="menu-li"><a href="{{URL::to('/')}}">Главная</a></li>
                            <li class="menu-li"><a href="{{URL::to('/seminars')}}">Семинары</a></li>
                            <li class="menu-li"><a href="{{URL::to('/feedback')}}">Отзывы</a></li>
                            <li class="menu-li"><a href="{{URL::to('/lektors')}}">Лекторы</a></li>
                            <li class="menu-li"><a href="{{URL::to('/contacts')}}">Контакты</a></li>
                        </ul>
                    </nav>
                </header>

                @yield('content')
                
            </div>
        </div>
        <footer class="footer">
            <span class="fl-l footer-text">Global-Tender &copy; 2010 - 2014</span>
        </footer>
        <div class="overlay">
            <div class="pop-window closed" data-popup="apply">
                <a href="#" class="pop-cross js-pop-close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="apply-form">
                    <input type="hidden" name="seminar" value="<?=$seminar[0]?> <?=$seminar[1]?>">
                    <div class="one-block">
                        <div class="block-title">Организация:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Полное название организации (включая форму собственности):</span>
                                <span><input type="text" name="org-name"></span>
                            </div>
                            <div class="block-row">
                                <span>Название организации (краткое):</span>
                                <span><input type="text" name="org-short"></span>
                            </div>
                            <div class="block-row">
                                <span>ИНН:</span>
                                <span><input type="text" name="inn"></span>
                                <span>КПП: <input type="text" name="kpp"></span>
                            </div>
                            <div class="block-h2">
                                Почтовый адрес
                                <span class="desc">Указываются индекс и фактический адрес организации. Необходимо указать тот адрес, который указывался при регистрации в ИФНС.</span>
                                
                            </div>
                            <div class="block-row">
                                <span>совпадает с юридическим</span>
                                <span><input type="checkbox" name="uri"></span>
                            </div>
                            <div class="block-row">
                                <span>Индекс:</span>
                                <span><input class="min-input" type="text" name="zip-code"></span>
                                <span>Область: <input type="text" name="region"></span>
                            </div>
                            <div class="block-row">
                                <span>Город:</span>
                                <span><input type="text" name="city"></span>
                                <span>Улица: <input type="text" name="street"></span>
                                <span>Дом: <input class="min-input" type="text" name="home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Руководитель:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>ФИО:</span>
                                <span><input type="text" name="fio"></span>
                            </div>
                            <div class="block-row">
                                <span>Должность:</span>
                                <span><input type="text" name="post"></span>
                            </div>
                            <div class="block-h2">
                                Руководитель действует на основании
                            </div>
                            <div class="block-row">
                                <span>Устава:</span>
                                <span><input type="checkbox" name="act" value="ustav"></span>
                                <span>Положения: <input type="checkbox" name="act" value="polozhenie"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Список участников семинара:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Количество участников:</span>
                                <span><input type="text" name="amount"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Контактное лицо:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>ФИО:</span>
                                <span><input type="text" name="contact-name"></span>
                            </div>
                            <div class="block-row">
                                <span>Должность:</span>
                                <span><input type="text" name="contact-post"></span>
                            </div>
                            <div class="block-row">
                                <span>E-mail:</span>
                                <span><input type="text" name="contact-email"></span>
                            </div>
                            <div class="block-row">
                                <span>Телефон:</span>
                                <span><input type="text" name="contact-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Комментарий:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Комментарий:</span>
                                <span><input type="text" name="comment"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Соглашение:</div>
                        <div class="block-body">
                            <div class="block-h2">
                                Соглашение о предоставлении и использовании персональных данных
                            </div>

                            <textarea type="text" readonly="readonly" class="policy-text">
                                 СОГЛАШЕНИЕ О ПРЕДОСТАВЛЕНИИ И ИСПОЛЬЗОВАНИИ ПЕРСОНАЛЬНЫХ ДАННЫХ

                                    Настоящее соглашение регламентирует отношения между ООО «Глобал-Тендер» и физическим лицом (Пользователь) и вступает в силу с момента принятия Пользователем условий настоящего соглашения. При несогласии Пользователя с хотя бы одним из пунктов соглашения, Пользователь не имеет права дальнейшей регистрации. Продолжение процедуры регистрации говорит о полном и безоговорочном согласии с настоящим соглашением.

                                    ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ
                                    Регистрация - процедура, в ходе которой Пользователь предоставляет достоверные данные о себе по утвержденной форме регистрации (регистрационная карта). Прохождение процедуры регистрации говорит о том, что Стороны полно и безоговорочно согласились с условиями настоящего соглашения.
                                    Персональные данные Пользователя - данные, используемые для идентификации личности, добровольно указанные Пользователем при прохождении регистрации. Данные хранятся в базе данных на сервере ООО «Глобал-Тендер» и подлежат использованию исключительно в соответствии с настоящим соглашением и законодательством РФ.

                                    ИСПОЛЬЗОВАНИЕ ПЕРСОНАЛЬНЫХ ДАННЫХ
                                    Мы используем персональные данные Пользователя только для тех целей, которые указываются при их сборе. 
                                    Мы не используем персональные данные для других целей без согласия Пользователя. 
                                    Мы можем использовать персональные данные Пользователя для следующих целей: 
                                    Для организации выдачи Пользователю электронной цифровой подписи в рамках сети Аккредитованных при Некоммерческой организации «Глобал-Тендер» Удостоверяющих центров, а также ее обслуживания и оказания сопутствующих услуг; 
                                    Для обратной связи с Пользователем в целях предоставления информации или услуги;
                                    Для ответов на запросы Пользователя в службу поддержки; 
                                    Для выполнения обязательств по договорам.
                                    Для использования персональных данных для любой иной цели мы запрашиваем подтверждение Пользователя. 
                                    Пользователь соглашается, что ООО «Глобал-Тендер» оставляет за собой право использовать его персональные данные анонимно и в обобщенном виде для статистических целей. 

                                    ОБЯЗАТЕЛЬСТВА ПОЛЬЗОВАТЕЛЯ ПО РЕГИСТРАЦИИ
                                    Пользователь соглашается предоставить правдивую, точную и полную информацию о себе по вопросам, предлагаемым в регистрационной карте. Если Пользователь предоставляет неверную информацию, ООО «Глобал-Тендер» имеет право приостановить либо отменить регистрацию.

                                    ПРЕДОСТАВЛЕНИЕ ПЕРСОНАЛЬНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЯ ТРЕТЬИМ ЛИЦАМ
                                    ООО «Глобал-Тендер» не передает персональные данные третьим лицам для маркетинговых целей без разрешения Пользователя. 
                                    ООО «Глобал-Тендер» может передавать персональные данные Пользователя компаниям, аффилированным по отношению к ООО «Глобал-Тендер», для обработки и хранения. 
                                    Пользователь соглашается с тем, что ООО «Глобал-Тендер» передает персональные данные Пользователя уполномоченным организациям для создания и выдачи электронной цифровой подписи, выполнения требуемых услуг и операций. 
                                    ООО «Глобал-Тендер» предоставляем третьим лицам объем персональных данных, необходимый для оказания требуемой услуги или транзакции. 
                                    При необходимости ООО «Глобал-Тендер» можем использовать персональные данные Пользователя для ответа на претензии, исковые заявления.
                                    ООО «Глобал-Тендер» может собирать и, при необходимости, передавать уполномоченным органам имеющуюся в нашем распоряжении информацию для расследования, предотвращения и пресечения любых незаконных действий. 
                                    ООО «Глобал-Тендер» вправе раскрывать любые персональные данные по запросам правоохранительных органов, решению суда и в прочих случаях, предусмотренных законодательством РФ. 
                                    С целью предоставления дополнительной информации, оказания услуг, Пользователь можете быть направлен на другие ресурсы, содержащие информационные или функциональные ресурсы, предоставляемые третьими лицами. 
                                    Только в тех случаях, когда информация собирается от лица ООО «Глобал-Тендер», использование данных Пользователя будет определяться политикой ООО «Глобал-Тендер» в отношении конфиденциальности персональных данных. 
                                    При предоставлении информации на других ресурсах будут использоваться политики в отношении конфиденциальности персональных данных, проводимые их владельцами. 
                                    ООО «Глобал-Тендер» требует от своих партнеров использования политики в отношении конфиденциальности персональных данных, согласующихся с политикой ООО «Глобал-Тендер».

                                    БЕЗОПАСНОСТЬ ВАШИХ ПЕРСОНАЛЬНЫХ ДАННЫХ
                                    ООО «Глобал-Тендер» использует технологии безопасности, процедуры и организационные меры для защиты персональных данных Пользователя от несанкционированного доступа, использования или разглашения. 
                                    ООО «Глобал-Тендер» стремимся защитить персональные данные Пользователя, но не может гарантировать безопасность передаваемых данных. 
                                    ООО «Глобал-Тендер» рекомендует принимать все меры по защите ваших персональных данных при работе в Интернете. Часто меняйте пароли, используйте сочетание букв и цифр при создании паролей и используйте защищенный браузер.

                                    ХРАНЕНИЕ ДАННЫХ
                                    ООО «Глобал-Тендер» не хранит персональные данные Пользователя дольше, чем необходимо для целей их сбора, или чем требуется в соответствии с действующими законами или правилами.

                                            
                                            СОГЛАШЕНИЕ О ПРЕДОСТАВЛЕНИИ И ИСПОЛЬЗОВАНИИ ПЕРСОНАЛЬНЫХ ДАННЫХ

                                    Настоящее соглашение  регламентирует отношения между ООО «Глобал-Тендер» (OOО «ГТ») и физическим лицом (Пользователь) и вступает в силу с момента принятия Пользователем условий настоящего соглашения. При несогласии Пользователя с хотя бы одним из пунктов соглашения, Пользователь не имеет права дальнейшей регистрации. Продолжение процедуры регистрации говорит о полном и безоговорочном согласии с настоящим соглашением.

                                    ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ
                                    Регистрация - процедура, в ходе которой Пользователь предоставляет достоверные данные о себе по утвержденной форме регистрации (регистрационная карта). Прохождение процедуры регистрации говорит о том, что Стороны полно и безоговорочно согласились с условиями настоящего соглашения.
                                    Персональные данные Пользователя - данные, используемые для идентификации личности, добровольно указанные Пользователем при прохождении регистрации. Данные хранятся в базе данных на сервере OOO «Глобал-Тендер» и подлежат использованию исключительно в соответствии с настоящим соглашением и законодательством РФ.

                                    ИСПОЛЬЗОВАНИЕ ПЕРСОНАЛЬНЫХ ДАННЫХ
                                    Мы используем персональные данные Пользователя только для тех целей, которые указываются при их сборе. 
                                    Мы не используем персональные данные для других целей без согласия Пользователя. 
                                    Мы можем использовать персональные данные Пользователя для следующих целей: 
                                    Для организации выдачи Пользователю электронной цифровой подписи в рамках сети Аккредитованных при Некоммерческой организации «Глобал-Тендер» Удостоверяющих центров, а также ее обслуживания и оказания сопутствующих услуг; 
                                    Для обратной связи с Пользователем в целях предоставления информации или услуги;
                                    Для ответов на запросы Пользователя в службу поддержки; 
                                    Для выполнения обязательств по договорам.
                                    Для использования персональных данных для любой иной цели мы запрашиваем подтверждение Пользователя. 
                                    Пользователь соглашается, что ООО «Глобал-Тендер» оставляет за собой право использовать его персональные данные анонимно и в обобщенном виде для статистических целей. 

                                    ОБЯЗАТЕЛЬСТВА ПОЛЬЗОВАТЕЛЯ ПО РЕГИСТРАЦИИ
                                    Пользователь соглашается предоставить правдивую, точную и полную информацию о себе по вопросам, предлагаемым в регистрационной карте. Если Пользователь предоставляет неверную информацию, ООО «Глобал-Тендер» имеет право приостановить либо отменить регистрацию.

                                    ПРЕДОСТАВЛЕНИЕ  ПЕРСОНАЛЬНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЯ ТРЕТЬИМ ЛИЦАМ
                                    ООО «Глобал-Тендер» не передает персональные данные третьим лицам для маркетинговых целей без разрешения Пользователя. 
                                    ООО «Глобал-Тендер» может передавать персональные данные Пользователя компаниям,  
                                    аффилированным по отношению к  ООО «Глобал-Тендер», для обработки и хранения. 
                                    Пользователь соглашается с тем, что ООО «Глобал-Тендер» передает персональные данные Пользователя уполномоченным организациям для создания и выдачи электронной цифровой подписи, выполнения требуемых услуг  и операций. 
                                    ООО «Глобал-Тендер» предоставляем третьим лицам объем персональных данных, необходимый для оказания требуемой услуги или транзакции. 
                                    При необходимости ООО «Глобал-Тендер» можем использовать персональные данные Пользователя для ответа на претензии, исковые заявления.
                                    ООО «Глобал-Тендер» можем собирать и, при необходимости, передавать уполномоченным органам имеющуюся в нашем распоряжении информацию для расследования, предотвращения и пресечения любых незаконных действий. 
                                    ООО «Глобал-Тендер» вправе раскрывать любые персональные данные по запросам правоохранительных органов, решению суда и в прочих случаях, предусмотренных законодательством РФ. 
                                    С целью предоставления дополнительной информации, оказания услуг, Пользователь можете быть направлен на другие ресурсы, содержащие информационные или функциональные ресурсы, предоставляемые третьими лицами. 
                                    Только в тех случаях, когда информация собирается от лица ООО «Глобал-Тендер», использование данных Пользователя будет определяться политикой ООО «Глобал-Тендер» в отношении конфиденциальности персональных данных. 
                                    При предоставлении информации на других ресурсах будут использоваться политики в отношении конфиденциальности персональных данных, проводимые их владельцами. 
                                    ООО «Глобал-Тендер» требует от своих партнеров использования политики в отношении конфиденциальности персональных данных, согласующихся с политикой ООО «Глобал-Тендер».

                                    БЕЗОПАСНОСТЬ ВАШИХ ПЕРСОНАЛЬНЫХ ДАННЫХ
                                    ООО «Глобал-Тендер» использует технологии безопасности, процедуры и организационные меры для защиты персональных данных Пользователя от несанкционированного доступа, использования или разглашения. 
                                    ООО «Глобал-Тендер» стремимся защитить персональные данные Пользователя, но не может гарантировать безопасность передаваемых данных. 
                                    ООО «Глобал-Тендер» рекомендует принимать все меры по защите ваших персональных данных при работе в Интернете. Часто меняйте пароли, используйте сочетание букв и цифр при создании паролей и используйте защищенный браузер.

                                    ХРАНЕНИЕ ДАННЫХ
                                    OOO «Глобал-Тендер»  не хранит персональные данные Пользователя дольше, чем необходимо для целей их сбора, или чем требуется в соответствии с действующими законами или правилами.
                    
                            </textarea>
                            <div class="agree">
                                <input type="checkbox" name="policy" id="policy">
                                <label for="policy">Я принимаю условия соглашения</label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-cont">
                        <button class="btn-subm" type="submit"><i class="fa fa-spinner fa-spin"></i> Подать заявку</button>
                    </div>
                </form>
            </div>
            <div class="pop-result pop-window closed" data-popup="result">
                <div class="result-icon"></div>
                <div class="result-text"></div>
            </div>
        </div> 


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{URL::to('assets/js/plugins.js')}}"></script>
        <script src="{{URL::to('assets/js/main.js')}}"></script>

        @yield('script')

        <!-- Yandex.Metrika informer --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter22043605 = new Ya.Metrika({id:22043605, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!-- /Yandex.Metrika counter -->

    </body>
</html>
