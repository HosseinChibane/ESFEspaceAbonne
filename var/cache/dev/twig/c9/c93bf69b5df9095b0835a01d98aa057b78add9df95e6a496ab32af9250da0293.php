<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_4ea591034419858858ebdf80488e05ab60254328eb890b22da7ae7ec6dc3d23b extends Twig_Template
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
        $__internal_f49cab2a3c3b80eace5a6955dfb80612bea7aec5c20d55e54fdd5bc6534c2c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49cab2a3c3b80eace5a6955dfb80612bea7aec5c20d55e54fdd5bc6534c2c6c->enter($__internal_f49cab2a3c3b80eace5a6955dfb80612bea7aec5c20d55e54fdd5bc6534c2c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b8f09a97b1dada4fd37cdc2dc679272f9353f4caf6224a8c3ba64202d9808b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f09a97b1dada4fd37cdc2dc679272f9353f4caf6224a8c3ba64202d9808b94->enter($__internal_b8f09a97b1dada4fd37cdc2dc679272f9353f4caf6224a8c3ba64202d9808b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_f49cab2a3c3b80eace5a6955dfb80612bea7aec5c20d55e54fdd5bc6534c2c6c->leave($__internal_f49cab2a3c3b80eace5a6955dfb80612bea7aec5c20d55e54fdd5bc6534c2c6c_prof);

        
        $__internal_b8f09a97b1dada4fd37cdc2dc679272f9353f4caf6224a8c3ba64202d9808b94->leave($__internal_b8f09a97b1dada4fd37cdc2dc679272f9353f4caf6224a8c3ba64202d9808b94_prof);

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
