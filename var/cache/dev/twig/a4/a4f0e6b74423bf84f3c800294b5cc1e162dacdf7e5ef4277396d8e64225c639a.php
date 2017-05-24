<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b4f7fcecb888f9e320000e04cf53e2c6570fae8cb46ee01ab3789176f725ae59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_08c84ac0391372ae3a1cfceebbe753e53d6bb0831aeb7a3d0258967f2d5f5aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c84ac0391372ae3a1cfceebbe753e53d6bb0831aeb7a3d0258967f2d5f5aa9->enter($__internal_08c84ac0391372ae3a1cfceebbe753e53d6bb0831aeb7a3d0258967f2d5f5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d770785d855891ed3bb8ce28e3a80d60c77825bf03907d291c7128346cdc307a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d770785d855891ed3bb8ce28e3a80d60c77825bf03907d291c7128346cdc307a->enter($__internal_d770785d855891ed3bb8ce28e3a80d60c77825bf03907d291c7128346cdc307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c84ac0391372ae3a1cfceebbe753e53d6bb0831aeb7a3d0258967f2d5f5aa9->leave($__internal_08c84ac0391372ae3a1cfceebbe753e53d6bb0831aeb7a3d0258967f2d5f5aa9_prof);

        
        $__internal_d770785d855891ed3bb8ce28e3a80d60c77825bf03907d291c7128346cdc307a->leave($__internal_d770785d855891ed3bb8ce28e3a80d60c77825bf03907d291c7128346cdc307a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ee14e43c15fdb60a63e860d6ee1d8f906c00b07fb43c4937a52baa4cbd53e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee14e43c15fdb60a63e860d6ee1d8f906c00b07fb43c4937a52baa4cbd53e0e->enter($__internal_1ee14e43c15fdb60a63e860d6ee1d8f906c00b07fb43c4937a52baa4cbd53e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a89a7628b23fc0abfccf70ed8f72151cbd50178975050b18884cd66f7a3c17a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89a7628b23fc0abfccf70ed8f72151cbd50178975050b18884cd66f7a3c17a6->enter($__internal_a89a7628b23fc0abfccf70ed8f72151cbd50178975050b18884cd66f7a3c17a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a89a7628b23fc0abfccf70ed8f72151cbd50178975050b18884cd66f7a3c17a6->leave($__internal_a89a7628b23fc0abfccf70ed8f72151cbd50178975050b18884cd66f7a3c17a6_prof);

        
        $__internal_1ee14e43c15fdb60a63e860d6ee1d8f906c00b07fb43c4937a52baa4cbd53e0e->leave($__internal_1ee14e43c15fdb60a63e860d6ee1d8f906c00b07fb43c4937a52baa4cbd53e0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
