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
        $__internal_544d2c281bd5f5c649ccfda9298e0dc4f6f9410b42f505582aab803021fcaeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544d2c281bd5f5c649ccfda9298e0dc4f6f9410b42f505582aab803021fcaeb7->enter($__internal_544d2c281bd5f5c649ccfda9298e0dc4f6f9410b42f505582aab803021fcaeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_40eaf6ede7a66f4d6714a9ff5fa650822e0e404fd7146ebc3ff3975f6c0105b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40eaf6ede7a66f4d6714a9ff5fa650822e0e404fd7146ebc3ff3975f6c0105b9->enter($__internal_40eaf6ede7a66f4d6714a9ff5fa650822e0e404fd7146ebc3ff3975f6c0105b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544d2c281bd5f5c649ccfda9298e0dc4f6f9410b42f505582aab803021fcaeb7->leave($__internal_544d2c281bd5f5c649ccfda9298e0dc4f6f9410b42f505582aab803021fcaeb7_prof);

        
        $__internal_40eaf6ede7a66f4d6714a9ff5fa650822e0e404fd7146ebc3ff3975f6c0105b9->leave($__internal_40eaf6ede7a66f4d6714a9ff5fa650822e0e404fd7146ebc3ff3975f6c0105b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d261a26ced8472604573f5242b28944e3ff4d64f23250c9cf548604c066d2f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d261a26ced8472604573f5242b28944e3ff4d64f23250c9cf548604c066d2f2e->enter($__internal_d261a26ced8472604573f5242b28944e3ff4d64f23250c9cf548604c066d2f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_141a1a20d0686fdd25b57d10c1c2926c4a2fa946acc772a442265340b192cd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141a1a20d0686fdd25b57d10c1c2926c4a2fa946acc772a442265340b192cd71->enter($__internal_141a1a20d0686fdd25b57d10c1c2926c4a2fa946acc772a442265340b192cd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_141a1a20d0686fdd25b57d10c1c2926c4a2fa946acc772a442265340b192cd71->leave($__internal_141a1a20d0686fdd25b57d10c1c2926c4a2fa946acc772a442265340b192cd71_prof);

        
        $__internal_d261a26ced8472604573f5242b28944e3ff4d64f23250c9cf548604c066d2f2e->leave($__internal_d261a26ced8472604573f5242b28944e3ff4d64f23250c9cf548604c066d2f2e_prof);

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
