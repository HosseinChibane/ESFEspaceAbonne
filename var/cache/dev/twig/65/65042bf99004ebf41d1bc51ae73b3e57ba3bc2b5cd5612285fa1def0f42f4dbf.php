<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d0d652fee2a38c3ac13d4181a48654502c213f04c6cb47be032cad625aca8386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c9d18c86429ac16778af0b2f74cb67f86d5155fca0ad35dc93ac32a5dd437f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9d18c86429ac16778af0b2f74cb67f86d5155fca0ad35dc93ac32a5dd437f1->enter($__internal_1c9d18c86429ac16778af0b2f74cb67f86d5155fca0ad35dc93ac32a5dd437f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a3a1d0cf5b81ca7555d8e5eb0c3042bb8ae49cef8e21aff642228d45ca43b370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a1d0cf5b81ca7555d8e5eb0c3042bb8ae49cef8e21aff642228d45ca43b370->enter($__internal_a3a1d0cf5b81ca7555d8e5eb0c3042bb8ae49cef8e21aff642228d45ca43b370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9d18c86429ac16778af0b2f74cb67f86d5155fca0ad35dc93ac32a5dd437f1->leave($__internal_1c9d18c86429ac16778af0b2f74cb67f86d5155fca0ad35dc93ac32a5dd437f1_prof);

        
        $__internal_a3a1d0cf5b81ca7555d8e5eb0c3042bb8ae49cef8e21aff642228d45ca43b370->leave($__internal_a3a1d0cf5b81ca7555d8e5eb0c3042bb8ae49cef8e21aff642228d45ca43b370_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbe02b704a1cd7a11ec3e0d716028d8cafd191fdc2b642a06e134b60017afba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe02b704a1cd7a11ec3e0d716028d8cafd191fdc2b642a06e134b60017afba4->enter($__internal_cbe02b704a1cd7a11ec3e0d716028d8cafd191fdc2b642a06e134b60017afba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4188ca9eefc88cf8edf153b67e54006230c2be2a176e265559166fcb81096a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4188ca9eefc88cf8edf153b67e54006230c2be2a176e265559166fcb81096a25->enter($__internal_4188ca9eefc88cf8edf153b67e54006230c2be2a176e265559166fcb81096a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4188ca9eefc88cf8edf153b67e54006230c2be2a176e265559166fcb81096a25->leave($__internal_4188ca9eefc88cf8edf153b67e54006230c2be2a176e265559166fcb81096a25_prof);

        
        $__internal_cbe02b704a1cd7a11ec3e0d716028d8cafd191fdc2b642a06e134b60017afba4->leave($__internal_cbe02b704a1cd7a11ec3e0d716028d8cafd191fdc2b642a06e134b60017afba4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d21709189dbb6c876caf30de05f15c6c43a9800f462dde69d36a786917432464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21709189dbb6c876caf30de05f15c6c43a9800f462dde69d36a786917432464->enter($__internal_d21709189dbb6c876caf30de05f15c6c43a9800f462dde69d36a786917432464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_948e5660659f5499367737edca43a00ba08a320cae52e353eecffad32d915c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948e5660659f5499367737edca43a00ba08a320cae52e353eecffad32d915c7c->enter($__internal_948e5660659f5499367737edca43a00ba08a320cae52e353eecffad32d915c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_948e5660659f5499367737edca43a00ba08a320cae52e353eecffad32d915c7c->leave($__internal_948e5660659f5499367737edca43a00ba08a320cae52e353eecffad32d915c7c_prof);

        
        $__internal_d21709189dbb6c876caf30de05f15c6c43a9800f462dde69d36a786917432464->leave($__internal_d21709189dbb6c876caf30de05f15c6c43a9800f462dde69d36a786917432464_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
