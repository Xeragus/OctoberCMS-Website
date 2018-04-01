<?php

/* C:\xampp7\htdocs\october-playground/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm */
class __TwigTemplate_d91e16bf8988398c9d30e11937794d722509cd1bd9086a585661744b78c72e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">Xeragus Code</h1>
\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, reprehenderit iure animi possimus aspernatur eum commodi doloribus fugiat eius voluptatum illum ut deleniti id quidem vitae cum maiores libero sit.</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perferendis excepturi quam nemo possimus nulla cumque reprehenderit quos fuga nostrum.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 13
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  34 => 4,  25 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Xeragus Code</h1>
\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, reprehenderit iure animi possimus aspernatur eum commodi doloribus fugiat eius voluptatum illum ut deleniti id quidem vitae cum maiores libero sit.</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, perferendis excepturi quam nemo possimus nulla cumque reprehenderit quos fuga nostrum.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm", "");
    }
}
