<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f24177dcb61cbfb5f81db4058b5586bed868b99eec9ef2e9fe615da7b7c76b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c1d2a73cbd87e153fcaabb9e2696c93028b1608b535742ca844f3475baa60cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d2a73cbd87e153fcaabb9e2696c93028b1608b535742ca844f3475baa60cf8->enter($__internal_c1d2a73cbd87e153fcaabb9e2696c93028b1608b535742ca844f3475baa60cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_e54c47e25f02f023390a7a4a54347c1a254ca14ed8170da6a0fd3ea21b44b133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54c47e25f02f023390a7a4a54347c1a254ca14ed8170da6a0fd3ea21b44b133->enter($__internal_e54c47e25f02f023390a7a4a54347c1a254ca14ed8170da6a0fd3ea21b44b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d2a73cbd87e153fcaabb9e2696c93028b1608b535742ca844f3475baa60cf8->leave($__internal_c1d2a73cbd87e153fcaabb9e2696c93028b1608b535742ca844f3475baa60cf8_prof);

        
        $__internal_e54c47e25f02f023390a7a4a54347c1a254ca14ed8170da6a0fd3ea21b44b133->leave($__internal_e54c47e25f02f023390a7a4a54347c1a254ca14ed8170da6a0fd3ea21b44b133_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bb18d0048fa95dddc206f90a9ecf53463d59108b19eb3d051f625c1d6b34533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb18d0048fa95dddc206f90a9ecf53463d59108b19eb3d051f625c1d6b34533->enter($__internal_9bb18d0048fa95dddc206f90a9ecf53463d59108b19eb3d051f625c1d6b34533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9209371fe865affbba9cbb967f8115b3aad2560f130d7f06aee69c75a84f9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9209371fe865affbba9cbb967f8115b3aad2560f130d7f06aee69c75a84f9d0->enter($__internal_d9209371fe865affbba9cbb967f8115b3aad2560f130d7f06aee69c75a84f9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_d9209371fe865affbba9cbb967f8115b3aad2560f130d7f06aee69c75a84f9d0->leave($__internal_d9209371fe865affbba9cbb967f8115b3aad2560f130d7f06aee69c75a84f9d0_prof);

        
        $__internal_9bb18d0048fa95dddc206f90a9ecf53463d59108b19eb3d051f625c1d6b34533->leave($__internal_9bb18d0048fa95dddc206f90a9ecf53463d59108b19eb3d051f625c1d6b34533_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
