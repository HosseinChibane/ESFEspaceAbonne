<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_91b8d5ee3684a6922b299668f65c82deb43c1ee43db7e159733e7e1d425f43f4 extends Twig_Template
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
        $__internal_97111bbc4f76e179783e02d04e2702f5944b2c998119b81d990657783b960d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97111bbc4f76e179783e02d04e2702f5944b2c998119b81d990657783b960d15->enter($__internal_97111bbc4f76e179783e02d04e2702f5944b2c998119b81d990657783b960d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6bb12f10ef6efa2d1b79f8ea7733e4a2f4cb156c69b6d07a96864ff072415f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb12f10ef6efa2d1b79f8ea7733e4a2f4cb156c69b6d07a96864ff072415f5d->enter($__internal_6bb12f10ef6efa2d1b79f8ea7733e4a2f4cb156c69b6d07a96864ff072415f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_97111bbc4f76e179783e02d04e2702f5944b2c998119b81d990657783b960d15->leave($__internal_97111bbc4f76e179783e02d04e2702f5944b2c998119b81d990657783b960d15_prof);

        
        $__internal_6bb12f10ef6efa2d1b79f8ea7733e4a2f4cb156c69b6d07a96864ff072415f5d->leave($__internal_6bb12f10ef6efa2d1b79f8ea7733e4a2f4cb156c69b6d07a96864ff072415f5d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
