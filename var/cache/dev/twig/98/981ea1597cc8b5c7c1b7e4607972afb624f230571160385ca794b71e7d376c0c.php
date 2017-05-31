<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_07fd936e6b37bb528bbf9cce186f101a3c454ea4ac6b47b00d7f29bde621bcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e97ebcdd00a0c70b84de17646f3d8637a8bd546dcf0e3ad5e34327f1f260567e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97ebcdd00a0c70b84de17646f3d8637a8bd546dcf0e3ad5e34327f1f260567e->enter($__internal_e97ebcdd00a0c70b84de17646f3d8637a8bd546dcf0e3ad5e34327f1f260567e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_58e96c17c880c1f020070a6368ad4ce987310e03b20a79e3fab59ec0dc3d0d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e96c17c880c1f020070a6368ad4ce987310e03b20a79e3fab59ec0dc3d0d23->enter($__internal_58e96c17c880c1f020070a6368ad4ce987310e03b20a79e3fab59ec0dc3d0d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e97ebcdd00a0c70b84de17646f3d8637a8bd546dcf0e3ad5e34327f1f260567e->leave($__internal_e97ebcdd00a0c70b84de17646f3d8637a8bd546dcf0e3ad5e34327f1f260567e_prof);

        
        $__internal_58e96c17c880c1f020070a6368ad4ce987310e03b20a79e3fab59ec0dc3d0d23->leave($__internal_58e96c17c880c1f020070a6368ad4ce987310e03b20a79e3fab59ec0dc3d0d23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5e14818695a41af7d24cec41c4a91744b956d0798d93d0f947d796afe848676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e14818695a41af7d24cec41c4a91744b956d0798d93d0f947d796afe848676->enter($__internal_e5e14818695a41af7d24cec41c4a91744b956d0798d93d0f947d796afe848676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a08e8d07e17ef775f8b15d2f7888af1b93f0d2cc59fb1714840c72f72a8aab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a08e8d07e17ef775f8b15d2f7888af1b93f0d2cc59fb1714840c72f72a8aab8->enter($__internal_8a08e8d07e17ef775f8b15d2f7888af1b93f0d2cc59fb1714840c72f72a8aab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8a08e8d07e17ef775f8b15d2f7888af1b93f0d2cc59fb1714840c72f72a8aab8->leave($__internal_8a08e8d07e17ef775f8b15d2f7888af1b93f0d2cc59fb1714840c72f72a8aab8_prof);

        
        $__internal_e5e14818695a41af7d24cec41c4a91744b956d0798d93d0f947d796afe848676->leave($__internal_e5e14818695a41af7d24cec41c4a91744b956d0798d93d0f947d796afe848676_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
