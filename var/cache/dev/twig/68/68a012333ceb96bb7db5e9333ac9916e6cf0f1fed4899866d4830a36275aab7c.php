<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c7bfb4498e823a07d852f8ad5352aa9be73df8c82a184651ba762ad0ca96fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4c2b93361c76767dd72b9e690c4da587dfc1f3af814d2cd4cd40a7704652c2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2b93361c76767dd72b9e690c4da587dfc1f3af814d2cd4cd40a7704652c2ba->enter($__internal_4c2b93361c76767dd72b9e690c4da587dfc1f3af814d2cd4cd40a7704652c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_b0bbd6fbfbd29b789902bc900940fff516721b3f6628aa0bdee34ffe76b81cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bbd6fbfbd29b789902bc900940fff516721b3f6628aa0bdee34ffe76b81cc9->enter($__internal_b0bbd6fbfbd29b789902bc900940fff516721b3f6628aa0bdee34ffe76b81cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2b93361c76767dd72b9e690c4da587dfc1f3af814d2cd4cd40a7704652c2ba->leave($__internal_4c2b93361c76767dd72b9e690c4da587dfc1f3af814d2cd4cd40a7704652c2ba_prof);

        
        $__internal_b0bbd6fbfbd29b789902bc900940fff516721b3f6628aa0bdee34ffe76b81cc9->leave($__internal_b0bbd6fbfbd29b789902bc900940fff516721b3f6628aa0bdee34ffe76b81cc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1567fae66e121fbbd498ec80772328bf0b72a3f3291f7b69fabbdeb4f31b6540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1567fae66e121fbbd498ec80772328bf0b72a3f3291f7b69fabbdeb4f31b6540->enter($__internal_1567fae66e121fbbd498ec80772328bf0b72a3f3291f7b69fabbdeb4f31b6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2099ca9c69c25bc95fd5ea995ac411f294448e04ec7442d5b33f4d595664e811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2099ca9c69c25bc95fd5ea995ac411f294448e04ec7442d5b33f4d595664e811->enter($__internal_2099ca9c69c25bc95fd5ea995ac411f294448e04ec7442d5b33f4d595664e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2099ca9c69c25bc95fd5ea995ac411f294448e04ec7442d5b33f4d595664e811->leave($__internal_2099ca9c69c25bc95fd5ea995ac411f294448e04ec7442d5b33f4d595664e811_prof);

        
        $__internal_1567fae66e121fbbd498ec80772328bf0b72a3f3291f7b69fabbdeb4f31b6540->leave($__internal_1567fae66e121fbbd498ec80772328bf0b72a3f3291f7b69fabbdeb4f31b6540_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
