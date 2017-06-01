<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f2a9e4e0aa7c6350df6410b06bb5d1aa8182f06846a93b310cc82f26325b018e extends Twig_Template
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
        $__internal_a16f05ac2e74e5c14a6b1c1bdb0d6709f352a4a9bc904d40b9f82858382326bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16f05ac2e74e5c14a6b1c1bdb0d6709f352a4a9bc904d40b9f82858382326bf->enter($__internal_a16f05ac2e74e5c14a6b1c1bdb0d6709f352a4a9bc904d40b9f82858382326bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8f72f07713b337454b831e036d2cdd0a4256211bb61c3730e7e9ec0671430e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f72f07713b337454b831e036d2cdd0a4256211bb61c3730e7e9ec0671430e79->enter($__internal_8f72f07713b337454b831e036d2cdd0a4256211bb61c3730e7e9ec0671430e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_a16f05ac2e74e5c14a6b1c1bdb0d6709f352a4a9bc904d40b9f82858382326bf->leave($__internal_a16f05ac2e74e5c14a6b1c1bdb0d6709f352a4a9bc904d40b9f82858382326bf_prof);

        
        $__internal_8f72f07713b337454b831e036d2cdd0a4256211bb61c3730e7e9ec0671430e79->leave($__internal_8f72f07713b337454b831e036d2cdd0a4256211bb61c3730e7e9ec0671430e79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
