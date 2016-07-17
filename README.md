Компонент для загрузки изображения в область, аналог включаемой области, только не допускает чтобы пользователь ввел не нужные теги



### Пример использования ###



```
#!php

$APPLICATION->IncludeComponent(
	"ws:include.file", 
	"", 
	array(
		"FILE_SRC" => "/static/i/bg_0.jpg",
		"COMPONENT_TEMPLATE" => ""
	),
	false
);
```
