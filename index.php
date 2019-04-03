<!DOCTYPE html>
<html lang="ru-RU" class="h-100">
<head>
<meta charset="utf-8">
<title>Управление рассылками Бизнес ИТ</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="/mailing/css/bootstrap.min.css">
<link rel="stylesheet" href="/mailing/css/style.css">


<link rel="shortcut icon" type="image/x-icon" href="/local/templates/main/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/local/templates/main/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/local/templates/main/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/local/templates/main/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/local/templates/main/apple-touch-icon-precomposed.png">

<style type="text/css">
  #results{display: none;}
</style>

</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
  <main role="main">

    <div class="container">

	  <a href="/"><img class="logo" src="/mailing/img/logo6.png" alt="Бизнес ИТ"></a>

      <h1 class="mt-5">Управление рассылками</h1>

      <p>Вы уже подписаны на рассылки компании Бизнес ИТ по выделенным темам:</p>

<div class="checkeddd">

  <form>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="ItsChecker">
        <label class="custom-control-label" for="ItsChecker"><strong>Обслуживание программ 1C</strong><br>
          <small>Новости, действующие акции и ближайшие мероприятия. Онлайн-кассы.</small></label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="GkhChecker">
        <label class="custom-control-label" for="GkhChecker"><strong>ЖКХ. Автоматизация водоканалов и теплосетей</strong><br>
          <small>Новости, акции, анонсы мероприятий, полезные примеры, разбор законодательства и часто задаваемых вопросов.</small></label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="KonsChecker">
        <label class="custom-control-label" for="KonsChecker"><strong>Консалтинг и автоматизация решений 1С</strong><br>
          <small>Реальные кейсы технологии корпоративных внедрений, оптимизация бизнес процессов, обзоры методологий: проектное управление, бюджетирование и казначейство, KPI, ERP, СRM.</small></label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="NewsbChecker">
        <label class="custom-control-label" for="NewsbChecker"><strong>Бюджетный учет</strong><br>
          <small>Централизация и цифровизация в органах власти, обзоры изменений в законодательстве, практические рекомендации по ведению бух. учета, анонсы и новости.</small></label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="EdocChecker">
        <label class="custom-control-label" for="EdocChecker"><strong>Системы управления документооборотом</strong><br>
          <small>Автоматизация бизнес процессов, электронные архивы, электронные приемные, межведомственные интеграции: СМЭВ, МЭДО, ССТУ, управление проектами. <br>Обзоры, кейсы, новости.</small></label>
      </div>

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="GsmetChecker">
        <label class="custom-control-label" for="GsmetChecker"><strong>Гранд СМЕТА</strong><br>
          <small>Ценообразование и сметное нормирование в строительстве. <br>Семинары, новости и практические рекомендации.</small></label>
      </div> 

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="UcntChecker">
        <label class="custom-control-label" for="UcntChecker"><strong>Учебный центр компании Бизнес ИТ</strong><br>
          <small>Курсы для бухгалтеров, программистов, менеджеров и сметчиков. <br>Увлекательные занятия по программированию для детей. Дистанционное образование.</small></label>
      </div>

  </form> 

</div>

<div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="otpis">
              <p>Если вас заинтересовали другие темы рассылок, <br>то выберете их и нажмите кнопку:</p>           
              <button class="btn btn-primary" id="subscribe" click role="button">Подтвердить</button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="otpis">
              <p><small>Если вам не интересны темы рассылок, <button type="button" onclick="Unsubscribe()" role="button" class="btnotp">отпишитесь.</button></small></p>           
            </div>
        </div>
      </div>
</div>

</div>

</main>


<footer class="footer mt-auto py-3">

  <div class="container">
      <span class="text-muted">
        &copy; Copyright, 1995-<?php echo date('Y'); ?>, &nbsp;Бизнес ИТ. Все права защищены.
      </span>
  </div>

</footer>


<script>

// Взял урл, распил, взял id, почекал
// Мега короткий вариант

let url = window.location.search;
let arr = url.split('&');
arr.shift(); 
arr.map(id => document.querySelector(`#${id}`).checked = true)

//Назначаю id и беру селектор;

const bt = document.getElementById( 'subscribe' );
const ch = document.querySelectorAll( 'input[type="checkbox"]' );

bt.addEventListener( 'click', click );

function click() {
    const Email = document.location.href.split('?')[1];
    let href = 'https://publication.biz-it.ru/fran/hs/mail/subscribe?' + Email;
    let checked = [ ], unchecked = [ ];
    ch.forEach( i => i.checked ? checked.push( i.id ) : unchecked.push( i.id ) );
    if ( checked.length ) {
        href += '&check=' + checked.join( ',' );
    }
    if ( unchecked.length ) {
        href += '&uncheck=' + unchecked.join( ',' );
    }
    // ...
    console.log( href );
    document.location.href=href;
    
}

// Отписка от всего   

function Unsubscribe() {
 
      const inputs = document.getElementsByTagName('input');

      console.log(inputs);
      
      var ids = "";

      for(var i = 0; i < inputs.length; i++) {
        console.log(inputs[i]);
        if (inputs[i].checked) {
          ids += inputs[i].id + ',';
        }
      }

      if (ids.length > 0) {
        const Email = document.location.href.split('?')[1];
        const url='https://publication.biz-it.ru/fran/hs/mail/unsubscribe?' + Email + '&id=' + ids.substring(0, ids.length - 1);
        document.location.href=url;
      }

    };

document.writeln("Ваш e-mail: " + Email);


</script>


</body>
</html>

