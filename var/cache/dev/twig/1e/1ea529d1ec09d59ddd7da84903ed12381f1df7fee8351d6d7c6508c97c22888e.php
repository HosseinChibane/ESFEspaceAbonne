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
        $__internal_82fbfebcab24cd2bafbf9798a7ffe55bfc1645622d5797cd45f9907646188337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fbfebcab24cd2bafbf9798a7ffe55bfc1645622d5797cd45f9907646188337->enter($__internal_82fbfebcab24cd2bafbf9798a7ffe55bfc1645622d5797cd45f9907646188337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_cee46db91eed231ce5d2614816f9f3d4bbf956286ecbdb9dbcfc9ab76ca6cc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee46db91eed231ce5d2614816f9f3d4bbf956286ecbdb9dbcfc9ab76ca6cc62->enter($__internal_cee46db91eed231ce5d2614816f9f3d4bbf956286ecbdb9dbcfc9ab76ca6cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_82fbfebcab24cd2bafbf9798a7ffe55bfc1645622d5797cd45f9907646188337->leave($__internal_82fbfebcab24cd2bafbf9798a7ffe55bfc1645622d5797cd45f9907646188337_prof);

        
        $__internal_cee46db91eed231ce5d2614816f9f3d4bbf956286ecbdb9dbcfc9ab76ca6cc62->leave($__internal_cee46db91eed231ce5d2614816f9f3d4bbf956286ecbdb9dbcfc9ab76ca6cc62_prof);

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
