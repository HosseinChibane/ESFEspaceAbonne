<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_9b7f382caf7efa41e29abff6fb8ac657e199abbade0dacd8e2aa4e6bdfd38b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_86fc01f5d1b2327b1f3bc6ae60dcb5815616284c8805cdb2b5ae60af0970fd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fc01f5d1b2327b1f3bc6ae60dcb5815616284c8805cdb2b5ae60af0970fd8d->enter($__internal_86fc01f5d1b2327b1f3bc6ae60dcb5815616284c8805cdb2b5ae60af0970fd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_347b1a425a6c5b12c1fbf18302b7ecabe1c6a57e1f8b2d94dfd20749036cbdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347b1a425a6c5b12c1fbf18302b7ecabe1c6a57e1f8b2d94dfd20749036cbdf8->enter($__internal_347b1a425a6c5b12c1fbf18302b7ecabe1c6a57e1f8b2d94dfd20749036cbdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86fc01f5d1b2327b1f3bc6ae60dcb5815616284c8805cdb2b5ae60af0970fd8d->leave($__internal_86fc01f5d1b2327b1f3bc6ae60dcb5815616284c8805cdb2b5ae60af0970fd8d_prof);

        
        $__internal_347b1a425a6c5b12c1fbf18302b7ecabe1c6a57e1f8b2d94dfd20749036cbdf8->leave($__internal_347b1a425a6c5b12c1fbf18302b7ecabe1c6a57e1f8b2d94dfd20749036cbdf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16b5020bebdb9037f8550b1651e4ccb8736f55a6bf831082e5ae2e6f0bbfbf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b5020bebdb9037f8550b1651e4ccb8736f55a6bf831082e5ae2e6f0bbfbf91->enter($__internal_16b5020bebdb9037f8550b1651e4ccb8736f55a6bf831082e5ae2e6f0bbfbf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b129dd1842293038356f37ee1b1b08cbbf449b76cebe3a7718b7f4b61c0f69d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b129dd1842293038356f37ee1b1b08cbbf449b76cebe3a7718b7f4b61c0f69d8->enter($__internal_b129dd1842293038356f37ee1b1b08cbbf449b76cebe3a7718b7f4b61c0f69d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b129dd1842293038356f37ee1b1b08cbbf449b76cebe3a7718b7f4b61c0f69d8->leave($__internal_b129dd1842293038356f37ee1b1b08cbbf449b76cebe3a7718b7f4b61c0f69d8_prof);

        
        $__internal_16b5020bebdb9037f8550b1651e4ccb8736f55a6bf831082e5ae2e6f0bbfbf91->leave($__internal_16b5020bebdb9037f8550b1651e4ccb8736f55a6bf831082e5ae2e6f0bbfbf91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
