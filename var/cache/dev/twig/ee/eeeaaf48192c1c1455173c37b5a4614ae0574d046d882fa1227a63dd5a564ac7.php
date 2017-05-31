<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c8f560cfa1de8ac8da3c49c8fa93a1fb563506353a0aa9180ffac8ab66709027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae380ea7001ed957452905e58e2005fa0d9c4df27078f4a87de03e6055de64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae380ea7001ed957452905e58e2005fa0d9c4df27078f4a87de03e6055de64d->enter($__internal_7ae380ea7001ed957452905e58e2005fa0d9c4df27078f4a87de03e6055de64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_05a2f70d2c5266319d8e413016e22a2892a4d7ac0766fd460c27854e1f764e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a2f70d2c5266319d8e413016e22a2892a4d7ac0766fd460c27854e1f764e3a->enter($__internal_05a2f70d2c5266319d8e413016e22a2892a4d7ac0766fd460c27854e1f764e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae380ea7001ed957452905e58e2005fa0d9c4df27078f4a87de03e6055de64d->leave($__internal_7ae380ea7001ed957452905e58e2005fa0d9c4df27078f4a87de03e6055de64d_prof);

        
        $__internal_05a2f70d2c5266319d8e413016e22a2892a4d7ac0766fd460c27854e1f764e3a->leave($__internal_05a2f70d2c5266319d8e413016e22a2892a4d7ac0766fd460c27854e1f764e3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4df8470b3ed67e942c74867c49ed9b3d85e604b6aaf4bee2416574a678f13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4df8470b3ed67e942c74867c49ed9b3d85e604b6aaf4bee2416574a678f13d->enter($__internal_df4df8470b3ed67e942c74867c49ed9b3d85e604b6aaf4bee2416574a678f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64936055c607ebe7414e6793b2dcf454e354962a812ab96a131d16ddf5c51e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64936055c607ebe7414e6793b2dcf454e354962a812ab96a131d16ddf5c51e20->enter($__internal_64936055c607ebe7414e6793b2dcf454e354962a812ab96a131d16ddf5c51e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64936055c607ebe7414e6793b2dcf454e354962a812ab96a131d16ddf5c51e20->leave($__internal_64936055c607ebe7414e6793b2dcf454e354962a812ab96a131d16ddf5c51e20_prof);

        
        $__internal_df4df8470b3ed67e942c74867c49ed9b3d85e604b6aaf4bee2416574a678f13d->leave($__internal_df4df8470b3ed67e942c74867c49ed9b3d85e604b6aaf4bee2416574a678f13d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_391b7d698770a9601e800ab03fc430befee5d9af2701c72f824ceb243d935d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391b7d698770a9601e800ab03fc430befee5d9af2701c72f824ceb243d935d37->enter($__internal_391b7d698770a9601e800ab03fc430befee5d9af2701c72f824ceb243d935d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d76f1968e00e3094b954d805edea14b899bdbab0c7383e9beaf7a9956147b49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76f1968e00e3094b954d805edea14b899bdbab0c7383e9beaf7a9956147b49f->enter($__internal_d76f1968e00e3094b954d805edea14b899bdbab0c7383e9beaf7a9956147b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d76f1968e00e3094b954d805edea14b899bdbab0c7383e9beaf7a9956147b49f->leave($__internal_d76f1968e00e3094b954d805edea14b899bdbab0c7383e9beaf7a9956147b49f_prof);

        
        $__internal_391b7d698770a9601e800ab03fc430befee5d9af2701c72f824ceb243d935d37->leave($__internal_391b7d698770a9601e800ab03fc430befee5d9af2701c72f824ceb243d935d37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
