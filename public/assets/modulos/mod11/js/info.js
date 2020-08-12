function opc1() {
	swal.mixin({
		type: 'info',
		confirmButtonText: 'Siguiente &rarr;',
		backdrop: 'rgb(240, 255, 255)',
		progressSteps: ['1', '2', '3', '4', '5', '6']
	}).queue([
		{
			title: 'Medios, tecnología y el mundo global (Global Village)',
			text: 'El tema de la propiedad y el control de los medios de comunicación es crucial ya que esto ' +
				'define el contenido de los medios y los procesos. A pesar de que los periodistas promueven ' +
				'la democracia en el ejercicio de la libertad de expresión y la libertad de prensa, esta ' +
				'libertad e independencia de los periodistas, de acuerdo a algunos críticos, de alguna manera ' +
				'recibe el impacto de los asuntos financieros y políticos de los dueños de los medios o sus ' +
				'empleados – en algunos casos puede ser bastante sutil y en otros suele ser bastante obvio.'
		},
		{
			text: 'Dicho control, incluyendo su patrón y estructura, básicamente está formado por las ' +
				'realidades generalizadas (y geopolíticas) y la potencial concentración de la propiedad. Es ' +
				'por esto que tanto la independencia editorial y el pluralismo de los medios a nivel local y ' +
				'global es importante.'
		},
		{
			text: 'Debido a la creciente complejidad geográfica de los medios, los flujos de medios no sólo van ' +
				'ahora del Norte al Sur sino que también van de Sur-Norte y de Sur-Sur. Algunos medios ' +
				'influyentes regionales están cambiando la configuración del sistema internacional de medios. ' +
				'En la mayoría de países alrededor del mundo, las organizaciones de medios masivos son ' +
				'compañías comerciales privadas. Otras tienen propietarios privados pero no comerciales, como ' +
				'aquellas que están operadas por las organizaciones no gubernamentales, mientras que otras ' +
				'son de propiedad del gobierno y están controladas por este.'
		},
		{
			text: 'En el campo de la difusión, el modelo de servicio público de difusión provee una alternativa ' +
				'tanto para los medios comerciales como para los de propiedad del gobierno. Un desarrollo que ' +
				'se ha vuelto positivo es la creciente popularidad de los medios que pertenecen a las ' +
				'comunidades, lo que involucra a los residentes locales en el desarrollo del contenido y da ' +
				'voz a los sectores marginados de la sociedad.'
		},
		{
			text: 'El tema clave aquí es ¿Cómo los medios pueden ayudar a promover un rango de opciones más amplio, ' +
				'con más capacidad de selección y libertad? El sistema de medios comerciales actual requiere atención ' +
				'especial ya que la publicidad sigue siendo la principal fuente de ingresos. ¿Cómo pueden las ' +
				'organizaciones mediáticas mantener su independencia y la confianza del público, y al mismo tiempo ' +
				'permanecer viables (rentables) y sostenibles (en términos de operaciones)? Se debería tomar en cuenta ' +
				'el impacto de sobredimensionar cualquiera de los dos factores.'
		},
		{
			text: 'Esté módulo termina con una nota de optimismo, con una discusión sobre los medios alternativos, ' +
				'especialmente aquellos en pequeñas comunidades, que operan en el panorama de los medios globales. ' +
				'También se habla sobre el número creciente de canales mediáticos, ya que estos ofrecen alternativas ' +
				'a la dominación de unos pocos, incluyendo sitios de noticias en red. Los medios comunitarios se pueden ' +
				'instalar en las escuelas/colegios, comunidades, lugares de trabajo, etc. y son una alternativa para los ' +
				'medios más grandes. Estos canales de medios “pequeños” promueven el derecho a la información y ofrecen ' +
				'a las personas locales una voz propia.'
		}
	]);
}