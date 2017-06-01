<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_de697eef40675d6be258a998bba48f274e00cddd38cc7bb49c0fefdeedb46cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_735ea955aed36c8bf4bda65ca1b351dbfb36627d21b402f0d9d7b777c6f34040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735ea955aed36c8bf4bda65ca1b351dbfb36627d21b402f0d9d7b777c6f34040->enter($__internal_735ea955aed36c8bf4bda65ca1b351dbfb36627d21b402f0d9d7b777c6f34040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_5931af5e7fa313512d7cf91367f19aa5519363361d44549a5460a67df2a2f453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5931af5e7fa313512d7cf91367f19aa5519363361d44549a5460a67df2a2f453->enter($__internal_5931af5e7fa313512d7cf91367f19aa5519363361d44549a5460a67df2a2f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735ea955aed36c8bf4bda65ca1b351dbfb36627d21b402f0d9d7b777c6f34040->leave($__internal_735ea955aed36c8bf4bda65ca1b351dbfb36627d21b402f0d9d7b777c6f34040_prof);

        
        $__internal_5931af5e7fa313512d7cf91367f19aa5519363361d44549a5460a67df2a2f453->leave($__internal_5931af5e7fa313512d7cf91367f19aa5519363361d44549a5460a67df2a2f453_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_000b2991ff1ba5448726ac152e7ce5447c7ef2a837ffd7d4310b8212ba92b1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000b2991ff1ba5448726ac152e7ce5447c7ef2a837ffd7d4310b8212ba92b1ff->enter($__internal_000b2991ff1ba5448726ac152e7ce5447c7ef2a837ffd7d4310b8212ba92b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20e3cba6d08c3d244d0997d48a40882647749b81ea36d54f73873d130c249ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e3cba6d08c3d244d0997d48a40882647749b81ea36d54f73873d130c249ce0->enter($__internal_20e3cba6d08c3d244d0997d48a40882647749b81ea36d54f73873d130c249ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_20e3cba6d08c3d244d0997d48a40882647749b81ea36d54f73873d130c249ce0->leave($__internal_20e3cba6d08c3d244d0997d48a40882647749b81ea36d54f73873d130c249ce0_prof);

        
        $__internal_000b2991ff1ba5448726ac152e7ce5447c7ef2a837ffd7d4310b8212ba92b1ff->leave($__internal_000b2991ff1ba5448726ac152e7ce5447c7ef2a837ffd7d4310b8212ba92b1ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
