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
        $__internal_575d316670c8aff660efe5b18c5281840ed0d7a048f1c488dfb8af75307fcaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575d316670c8aff660efe5b18c5281840ed0d7a048f1c488dfb8af75307fcaf8->enter($__internal_575d316670c8aff660efe5b18c5281840ed0d7a048f1c488dfb8af75307fcaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_e490629aa992829ca06cb114054ca6ef441bfec56b0336e338f21cc6fd42846c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e490629aa992829ca06cb114054ca6ef441bfec56b0336e338f21cc6fd42846c->enter($__internal_e490629aa992829ca06cb114054ca6ef441bfec56b0336e338f21cc6fd42846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_575d316670c8aff660efe5b18c5281840ed0d7a048f1c488dfb8af75307fcaf8->leave($__internal_575d316670c8aff660efe5b18c5281840ed0d7a048f1c488dfb8af75307fcaf8_prof);

        
        $__internal_e490629aa992829ca06cb114054ca6ef441bfec56b0336e338f21cc6fd42846c->leave($__internal_e490629aa992829ca06cb114054ca6ef441bfec56b0336e338f21cc6fd42846c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38aaeac3fcf12880928d17b03931e11b99beb54e5fab3d2fd3b61ae5190c7352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38aaeac3fcf12880928d17b03931e11b99beb54e5fab3d2fd3b61ae5190c7352->enter($__internal_38aaeac3fcf12880928d17b03931e11b99beb54e5fab3d2fd3b61ae5190c7352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_999cca425c15284867433fc502b15b7d72907289c85653943dab2a3c132b9234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999cca425c15284867433fc502b15b7d72907289c85653943dab2a3c132b9234->enter($__internal_999cca425c15284867433fc502b15b7d72907289c85653943dab2a3c132b9234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_999cca425c15284867433fc502b15b7d72907289c85653943dab2a3c132b9234->leave($__internal_999cca425c15284867433fc502b15b7d72907289c85653943dab2a3c132b9234_prof);

        
        $__internal_38aaeac3fcf12880928d17b03931e11b99beb54e5fab3d2fd3b61ae5190c7352->leave($__internal_38aaeac3fcf12880928d17b03931e11b99beb54e5fab3d2fd3b61ae5190c7352_prof);

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
