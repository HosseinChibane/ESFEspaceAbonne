<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_958f0f2b9c2da8c2b0653345df54629fa06480c477b7bb76be09d4b7136f9592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9a0b3bdf2d9d5102c19e302ef2536e48fd7091e687a1b1bbbc99368ff4144d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0b3bdf2d9d5102c19e302ef2536e48fd7091e687a1b1bbbc99368ff4144d38->enter($__internal_9a0b3bdf2d9d5102c19e302ef2536e48fd7091e687a1b1bbbc99368ff4144d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4dd5ff5fc7a31d39bf91a631cf1b6dca6c6b0bb377a8b51853ea863f0b67502d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd5ff5fc7a31d39bf91a631cf1b6dca6c6b0bb377a8b51853ea863f0b67502d->enter($__internal_4dd5ff5fc7a31d39bf91a631cf1b6dca6c6b0bb377a8b51853ea863f0b67502d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0b3bdf2d9d5102c19e302ef2536e48fd7091e687a1b1bbbc99368ff4144d38->leave($__internal_9a0b3bdf2d9d5102c19e302ef2536e48fd7091e687a1b1bbbc99368ff4144d38_prof);

        
        $__internal_4dd5ff5fc7a31d39bf91a631cf1b6dca6c6b0bb377a8b51853ea863f0b67502d->leave($__internal_4dd5ff5fc7a31d39bf91a631cf1b6dca6c6b0bb377a8b51853ea863f0b67502d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acc819ee97205a0c21db77a81de36ca7d98e26406f0f7d2b901eb49f24fca9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc819ee97205a0c21db77a81de36ca7d98e26406f0f7d2b901eb49f24fca9d2->enter($__internal_acc819ee97205a0c21db77a81de36ca7d98e26406f0f7d2b901eb49f24fca9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_44b1fe35eb5be7e0c30536529377603394ad364919bf4e47f00811b68467b9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b1fe35eb5be7e0c30536529377603394ad364919bf4e47f00811b68467b9d4->enter($__internal_44b1fe35eb5be7e0c30536529377603394ad364919bf4e47f00811b68467b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_44b1fe35eb5be7e0c30536529377603394ad364919bf4e47f00811b68467b9d4->leave($__internal_44b1fe35eb5be7e0c30536529377603394ad364919bf4e47f00811b68467b9d4_prof);

        
        $__internal_acc819ee97205a0c21db77a81de36ca7d98e26406f0f7d2b901eb49f24fca9d2->leave($__internal_acc819ee97205a0c21db77a81de36ca7d98e26406f0f7d2b901eb49f24fca9d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
