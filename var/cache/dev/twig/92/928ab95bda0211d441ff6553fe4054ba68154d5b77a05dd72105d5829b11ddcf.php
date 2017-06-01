<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5f840e16011cc759cc70b31de4cf65aed7cbe8b5d56852e3adbebc54020e7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_895a26e670c0ea7c6ba45e24f6f9129038ebcc968e09374d17f9bfd6bb901d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895a26e670c0ea7c6ba45e24f6f9129038ebcc968e09374d17f9bfd6bb901d21->enter($__internal_895a26e670c0ea7c6ba45e24f6f9129038ebcc968e09374d17f9bfd6bb901d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_bb25f28a8b26c3c78e6c7ca11476cab3a867d59d27ec46393e51b5ec6c4de941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb25f28a8b26c3c78e6c7ca11476cab3a867d59d27ec46393e51b5ec6c4de941->enter($__internal_bb25f28a8b26c3c78e6c7ca11476cab3a867d59d27ec46393e51b5ec6c4de941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895a26e670c0ea7c6ba45e24f6f9129038ebcc968e09374d17f9bfd6bb901d21->leave($__internal_895a26e670c0ea7c6ba45e24f6f9129038ebcc968e09374d17f9bfd6bb901d21_prof);

        
        $__internal_bb25f28a8b26c3c78e6c7ca11476cab3a867d59d27ec46393e51b5ec6c4de941->leave($__internal_bb25f28a8b26c3c78e6c7ca11476cab3a867d59d27ec46393e51b5ec6c4de941_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edfcef29504e4303496c71218d70e6aed3993e06e242bd7abbba900b4fa00d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfcef29504e4303496c71218d70e6aed3993e06e242bd7abbba900b4fa00d53->enter($__internal_edfcef29504e4303496c71218d70e6aed3993e06e242bd7abbba900b4fa00d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a1aa2c38662a425ee769849a7593984d4352d6c2defd120037b65f3e8ff1aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1aa2c38662a425ee769849a7593984d4352d6c2defd120037b65f3e8ff1aad->enter($__internal_4a1aa2c38662a425ee769849a7593984d4352d6c2defd120037b65f3e8ff1aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4a1aa2c38662a425ee769849a7593984d4352d6c2defd120037b65f3e8ff1aad->leave($__internal_4a1aa2c38662a425ee769849a7593984d4352d6c2defd120037b65f3e8ff1aad_prof);

        
        $__internal_edfcef29504e4303496c71218d70e6aed3993e06e242bd7abbba900b4fa00d53->leave($__internal_edfcef29504e4303496c71218d70e6aed3993e06e242bd7abbba900b4fa00d53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
