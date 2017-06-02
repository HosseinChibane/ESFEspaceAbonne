<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_10211c20825dbe7fc481b4965a9ce9b0d05759fa80bb1acd158f708b85643074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_19eaeeaf9fd5cc3c6c2eae7b6762bd1e369a4c822d3dcd35a1efe28cb2e59bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19eaeeaf9fd5cc3c6c2eae7b6762bd1e369a4c822d3dcd35a1efe28cb2e59bd9->enter($__internal_19eaeeaf9fd5cc3c6c2eae7b6762bd1e369a4c822d3dcd35a1efe28cb2e59bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f95348bce5286427c641d0db7409258594f240baa2ed7e2814ef98e1f9752b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95348bce5286427c641d0db7409258594f240baa2ed7e2814ef98e1f9752b79->enter($__internal_f95348bce5286427c641d0db7409258594f240baa2ed7e2814ef98e1f9752b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19eaeeaf9fd5cc3c6c2eae7b6762bd1e369a4c822d3dcd35a1efe28cb2e59bd9->leave($__internal_19eaeeaf9fd5cc3c6c2eae7b6762bd1e369a4c822d3dcd35a1efe28cb2e59bd9_prof);

        
        $__internal_f95348bce5286427c641d0db7409258594f240baa2ed7e2814ef98e1f9752b79->leave($__internal_f95348bce5286427c641d0db7409258594f240baa2ed7e2814ef98e1f9752b79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9de1806d03279cb85c7080e115356e332a3f471525641f95fcb594ed30b993b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de1806d03279cb85c7080e115356e332a3f471525641f95fcb594ed30b993b4->enter($__internal_9de1806d03279cb85c7080e115356e332a3f471525641f95fcb594ed30b993b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20c6e5ec430b089b53c8d5e20c339aea131883350b73935a0d0c08e9047f2482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c6e5ec430b089b53c8d5e20c339aea131883350b73935a0d0c08e9047f2482->enter($__internal_20c6e5ec430b089b53c8d5e20c339aea131883350b73935a0d0c08e9047f2482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_20c6e5ec430b089b53c8d5e20c339aea131883350b73935a0d0c08e9047f2482->leave($__internal_20c6e5ec430b089b53c8d5e20c339aea131883350b73935a0d0c08e9047f2482_prof);

        
        $__internal_9de1806d03279cb85c7080e115356e332a3f471525641f95fcb594ed30b993b4->leave($__internal_9de1806d03279cb85c7080e115356e332a3f471525641f95fcb594ed30b993b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
