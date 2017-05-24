<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c20fc9aa2a05b7e1df700606b235fa7cd5f3b5e70ba09bded1a531689a2f334d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_da1e772f3c76558052ff370c04903205326fd2501b3035b5a2d84eadcfa22613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1e772f3c76558052ff370c04903205326fd2501b3035b5a2d84eadcfa22613->enter($__internal_da1e772f3c76558052ff370c04903205326fd2501b3035b5a2d84eadcfa22613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_976cec492a7b167f0cb492024c0817b38f3a2d53bd50d45225a33bbd1da32187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976cec492a7b167f0cb492024c0817b38f3a2d53bd50d45225a33bbd1da32187->enter($__internal_976cec492a7b167f0cb492024c0817b38f3a2d53bd50d45225a33bbd1da32187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1e772f3c76558052ff370c04903205326fd2501b3035b5a2d84eadcfa22613->leave($__internal_da1e772f3c76558052ff370c04903205326fd2501b3035b5a2d84eadcfa22613_prof);

        
        $__internal_976cec492a7b167f0cb492024c0817b38f3a2d53bd50d45225a33bbd1da32187->leave($__internal_976cec492a7b167f0cb492024c0817b38f3a2d53bd50d45225a33bbd1da32187_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11ab8ab90d6f11b1451cb4c212c41e1c98d06ff900bee4f8db8d851289697962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ab8ab90d6f11b1451cb4c212c41e1c98d06ff900bee4f8db8d851289697962->enter($__internal_11ab8ab90d6f11b1451cb4c212c41e1c98d06ff900bee4f8db8d851289697962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ab91c2e28f2a513565efdf0bfad3851c6400cec361c76aaa18536deb76026e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab91c2e28f2a513565efdf0bfad3851c6400cec361c76aaa18536deb76026e5->enter($__internal_6ab91c2e28f2a513565efdf0bfad3851c6400cec361c76aaa18536deb76026e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6ab91c2e28f2a513565efdf0bfad3851c6400cec361c76aaa18536deb76026e5->leave($__internal_6ab91c2e28f2a513565efdf0bfad3851c6400cec361c76aaa18536deb76026e5_prof);

        
        $__internal_11ab8ab90d6f11b1451cb4c212c41e1c98d06ff900bee4f8db8d851289697962->leave($__internal_11ab8ab90d6f11b1451cb4c212c41e1c98d06ff900bee4f8db8d851289697962_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
