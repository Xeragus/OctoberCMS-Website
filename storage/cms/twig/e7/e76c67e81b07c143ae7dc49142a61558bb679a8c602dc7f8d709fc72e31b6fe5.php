<?php

/* C:\xampp7\htdocs\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_9d4194bc2487a3c943b815e7cf3fc7779b562c4991506d4455c87d43ef402458 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "C:\\xampp7\\htdocs\\october-playground/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
