<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_ba371487cd61643006d1bc3a7f8be04757c3671ff1097471bb0f004651d319e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_234de3ac786cad5e5e749095060e3a9def69eee8348566af0887a67bef269af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234de3ac786cad5e5e749095060e3a9def69eee8348566af0887a67bef269af5->enter($__internal_234de3ac786cad5e5e749095060e3a9def69eee8348566af0887a67bef269af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_f9cf4518466529d20b095c85daa267adc64b973d15a63ed33d3154fa424fc544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cf4518466529d20b095c85daa267adc64b973d15a63ed33d3154fa424fc544->enter($__internal_f9cf4518466529d20b095c85daa267adc64b973d15a63ed33d3154fa424fc544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234de3ac786cad5e5e749095060e3a9def69eee8348566af0887a67bef269af5->leave($__internal_234de3ac786cad5e5e749095060e3a9def69eee8348566af0887a67bef269af5_prof);

        
        $__internal_f9cf4518466529d20b095c85daa267adc64b973d15a63ed33d3154fa424fc544->leave($__internal_f9cf4518466529d20b095c85daa267adc64b973d15a63ed33d3154fa424fc544_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_715d5b18d43db3a7255966541de9bb1c756632ee251e04d459baa2b9bd260682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715d5b18d43db3a7255966541de9bb1c756632ee251e04d459baa2b9bd260682->enter($__internal_715d5b18d43db3a7255966541de9bb1c756632ee251e04d459baa2b9bd260682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99bac4d78924e655ef409c373c1a7f0912e4f5bdb388a7baaad44f3358b21e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bac4d78924e655ef409c373c1a7f0912e4f5bdb388a7baaad44f3358b21e12->enter($__internal_99bac4d78924e655ef409c373c1a7f0912e4f5bdb388a7baaad44f3358b21e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_99bac4d78924e655ef409c373c1a7f0912e4f5bdb388a7baaad44f3358b21e12->leave($__internal_99bac4d78924e655ef409c373c1a7f0912e4f5bdb388a7baaad44f3358b21e12_prof);

        
        $__internal_715d5b18d43db3a7255966541de9bb1c756632ee251e04d459baa2b9bd260682->leave($__internal_715d5b18d43db3a7255966541de9bb1c756632ee251e04d459baa2b9bd260682_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
