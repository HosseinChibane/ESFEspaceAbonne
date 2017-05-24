<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0dc16630face4d048b130e2c868eee39c909a2bd8b13049516646ed1ede44d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_54356bc83da17bb98ad30c4d9435ae034e60f1cca8544c71bd4a9c4cfa3bfb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54356bc83da17bb98ad30c4d9435ae034e60f1cca8544c71bd4a9c4cfa3bfb3c->enter($__internal_54356bc83da17bb98ad30c4d9435ae034e60f1cca8544c71bd4a9c4cfa3bfb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_9e6aa94297296b1ed4993f69d7dbdc3f13d317e1f6c193c502b3df4a6748c28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6aa94297296b1ed4993f69d7dbdc3f13d317e1f6c193c502b3df4a6748c28b->enter($__internal_9e6aa94297296b1ed4993f69d7dbdc3f13d317e1f6c193c502b3df4a6748c28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54356bc83da17bb98ad30c4d9435ae034e60f1cca8544c71bd4a9c4cfa3bfb3c->leave($__internal_54356bc83da17bb98ad30c4d9435ae034e60f1cca8544c71bd4a9c4cfa3bfb3c_prof);

        
        $__internal_9e6aa94297296b1ed4993f69d7dbdc3f13d317e1f6c193c502b3df4a6748c28b->leave($__internal_9e6aa94297296b1ed4993f69d7dbdc3f13d317e1f6c193c502b3df4a6748c28b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad35be9f8d6df73a601874fbe97cce391519957468678fd347f71a93612e55f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad35be9f8d6df73a601874fbe97cce391519957468678fd347f71a93612e55f3->enter($__internal_ad35be9f8d6df73a601874fbe97cce391519957468678fd347f71a93612e55f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91bf21b59b85f73ec7a41ae3c6b2868a671985aed5c2d08baec37294623ad58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91bf21b59b85f73ec7a41ae3c6b2868a671985aed5c2d08baec37294623ad58c->enter($__internal_91bf21b59b85f73ec7a41ae3c6b2868a671985aed5c2d08baec37294623ad58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_91bf21b59b85f73ec7a41ae3c6b2868a671985aed5c2d08baec37294623ad58c->leave($__internal_91bf21b59b85f73ec7a41ae3c6b2868a671985aed5c2d08baec37294623ad58c_prof);

        
        $__internal_ad35be9f8d6df73a601874fbe97cce391519957468678fd347f71a93612e55f3->leave($__internal_ad35be9f8d6df73a601874fbe97cce391519957468678fd347f71a93612e55f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
