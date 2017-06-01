<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_07f33d8a7fef8dd925b472c1b7cb757e67e81f3ed40080e23c8f1afb74264aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b72e205db2a911f2cc833f62d775c331376374401f4e93ced09a7ce8a11ab334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72e205db2a911f2cc833f62d775c331376374401f4e93ced09a7ce8a11ab334->enter($__internal_b72e205db2a911f2cc833f62d775c331376374401f4e93ced09a7ce8a11ab334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_bf0e515e55f987ab08feb0e6fdac67e8286f2f53e914ef803755fabca5256d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0e515e55f987ab08feb0e6fdac67e8286f2f53e914ef803755fabca5256d6c->enter($__internal_bf0e515e55f987ab08feb0e6fdac67e8286f2f53e914ef803755fabca5256d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72e205db2a911f2cc833f62d775c331376374401f4e93ced09a7ce8a11ab334->leave($__internal_b72e205db2a911f2cc833f62d775c331376374401f4e93ced09a7ce8a11ab334_prof);

        
        $__internal_bf0e515e55f987ab08feb0e6fdac67e8286f2f53e914ef803755fabca5256d6c->leave($__internal_bf0e515e55f987ab08feb0e6fdac67e8286f2f53e914ef803755fabca5256d6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_992599c9137a46dfe731ed764589f72cface8953211474ed0e32a5007692e937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992599c9137a46dfe731ed764589f72cface8953211474ed0e32a5007692e937->enter($__internal_992599c9137a46dfe731ed764589f72cface8953211474ed0e32a5007692e937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c4f574dd4bbea5331a397c36274f0a22d1cc14aa35f1adac8b00a1486ddad2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4f574dd4bbea5331a397c36274f0a22d1cc14aa35f1adac8b00a1486ddad2d->enter($__internal_9c4f574dd4bbea5331a397c36274f0a22d1cc14aa35f1adac8b00a1486ddad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9c4f574dd4bbea5331a397c36274f0a22d1cc14aa35f1adac8b00a1486ddad2d->leave($__internal_9c4f574dd4bbea5331a397c36274f0a22d1cc14aa35f1adac8b00a1486ddad2d_prof);

        
        $__internal_992599c9137a46dfe731ed764589f72cface8953211474ed0e32a5007692e937->leave($__internal_992599c9137a46dfe731ed764589f72cface8953211474ed0e32a5007692e937_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
