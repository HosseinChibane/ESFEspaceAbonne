<?php

/* ::base.html.twig */
class __TwigTemplate_611dedcd2614d62785879fbafc02bf8e2c8e9b441cd6b5f86643163ba09fae4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Header' => array($this, 'block_Header'),
            'Navigation' => array($this, 'block_Navigation'),
            'Body' => array($this, 'block_Body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d118d1189ce68f204c1b9d97dc63c7e0ceeb56843e5ca4cacf77d3808dd75efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118d1189ce68f204c1b9d97dc63c7e0ceeb56843e5ca4cacf77d3808dd75efb->enter($__internal_d118d1189ce68f204c1b9d97dc63c7e0ceeb56843e5ca4cacf77d3808dd75efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f081b4cc8c7048229d229f2c0d6ebd45cac4c62adbfb397453b1e5a3e2da4ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f081b4cc8c7048229d229f2c0d6ebd45cac4c62adbfb397453b1e5a3e2da4ab7->enter($__internal_f081b4cc8c7048229d229f2c0d6ebd45cac4c62adbfb397453b1e5a3e2da4ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>
  ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->displayBlock('Header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('Navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        $this->displayBlock('Body', $context, $blocks);
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 32
        echo "  ";
        // line 33
        echo "</body>  
</html>
";
        
        $__internal_d118d1189ce68f204c1b9d97dc63c7e0ceeb56843e5ca4cacf77d3808dd75efb->leave($__internal_d118d1189ce68f204c1b9d97dc63c7e0ceeb56843e5ca4cacf77d3808dd75efb_prof);

        
        $__internal_f081b4cc8c7048229d229f2c0d6ebd45cac4c62adbfb397453b1e5a3e2da4ab7->leave($__internal_f081b4cc8c7048229d229f2c0d6ebd45cac4c62adbfb397453b1e5a3e2da4ab7_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_ef33664d230b4fb98c8e104a08e16e9a7256f568fa39ec77ff9588c244340639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef33664d230b4fb98c8e104a08e16e9a7256f568fa39ec77ff9588c244340639->enter($__internal_ef33664d230b4fb98c8e104a08e16e9a7256f568fa39ec77ff9588c244340639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_e53ff3e405d87ccb410b81d9422fa4c10ace773cc9d1cad9a4370dc2d5d3b6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53ff3e405d87ccb410b81d9422fa4c10ace773cc9d1cad9a4370dc2d5d3b6f3->enter($__internal_e53ff3e405d87ccb410b81d9422fa4c10ace773cc9d1cad9a4370dc2d5d3b6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_e53ff3e405d87ccb410b81d9422fa4c10ace773cc9d1cad9a4370dc2d5d3b6f3->leave($__internal_e53ff3e405d87ccb410b81d9422fa4c10ace773cc9d1cad9a4370dc2d5d3b6f3_prof);

        
        $__internal_ef33664d230b4fb98c8e104a08e16e9a7256f568fa39ec77ff9588c244340639->leave($__internal_ef33664d230b4fb98c8e104a08e16e9a7256f568fa39ec77ff9588c244340639_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_77c316b03e0f06547e0b385e5ea079f317ea85abaca69fe37ad08398a5db40d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c316b03e0f06547e0b385e5ea079f317ea85abaca69fe37ad08398a5db40d5->enter($__internal_77c316b03e0f06547e0b385e5ea079f317ea85abaca69fe37ad08398a5db40d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_97b9b0f86b82e6482db0facee3972b7f54cd3080a9e37a07e4f65c276fffc29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b9b0f86b82e6482db0facee3972b7f54cd3080a9e37a07e4f65c276fffc29b->enter($__internal_97b9b0f86b82e6482db0facee3972b7f54cd3080a9e37a07e4f65c276fffc29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_97b9b0f86b82e6482db0facee3972b7f54cd3080a9e37a07e4f65c276fffc29b->leave($__internal_97b9b0f86b82e6482db0facee3972b7f54cd3080a9e37a07e4f65c276fffc29b_prof);

        
        $__internal_77c316b03e0f06547e0b385e5ea079f317ea85abaca69fe37ad08398a5db40d5->leave($__internal_77c316b03e0f06547e0b385e5ea079f317ea85abaca69fe37ad08398a5db40d5_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_859a08837f41739512fe30b7b305b32e797287fbb85ff411364f83f56bd3a8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859a08837f41739512fe30b7b305b32e797287fbb85ff411364f83f56bd3a8e5->enter($__internal_859a08837f41739512fe30b7b305b32e797287fbb85ff411364f83f56bd3a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_659f28234f86688f15120ef26ae5aa8bef2b7fcf86d9267e263a244cf3f4f6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659f28234f86688f15120ef26ae5aa8bef2b7fcf86d9267e263a244cf3f4f6f2->enter($__internal_659f28234f86688f15120ef26ae5aa8bef2b7fcf86d9267e263a244cf3f4f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_659f28234f86688f15120ef26ae5aa8bef2b7fcf86d9267e263a244cf3f4f6f2->leave($__internal_659f28234f86688f15120ef26ae5aa8bef2b7fcf86d9267e263a244cf3f4f6f2_prof);

        
        $__internal_859a08837f41739512fe30b7b305b32e797287fbb85ff411364f83f56bd3a8e5->leave($__internal_859a08837f41739512fe30b7b305b32e797287fbb85ff411364f83f56bd3a8e5_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_ac538fb39d3042ee4aec474eeed7b9d5d77d3a42912f05e9ecbc821d6515562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac538fb39d3042ee4aec474eeed7b9d5d77d3a42912f05e9ecbc821d6515562c->enter($__internal_ac538fb39d3042ee4aec474eeed7b9d5d77d3a42912f05e9ecbc821d6515562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_1234022c99a007c7a7590d7a45f8e9edf9f7fa827246b6e1a21019124a3d155d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1234022c99a007c7a7590d7a45f8e9edf9f7fa827246b6e1a21019124a3d155d->enter($__internal_1234022c99a007c7a7590d7a45f8e9edf9f7fa827246b6e1a21019124a3d155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_1234022c99a007c7a7590d7a45f8e9edf9f7fa827246b6e1a21019124a3d155d->leave($__internal_1234022c99a007c7a7590d7a45f8e9edf9f7fa827246b6e1a21019124a3d155d_prof);

        
        $__internal_ac538fb39d3042ee4aec474eeed7b9d5d77d3a42912f05e9ecbc821d6515562c->leave($__internal_ac538fb39d3042ee4aec474eeed7b9d5d77d3a42912f05e9ecbc821d6515562c_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_b0136649de6947525f512f8b272c00bf17d4c53e02f8cc34f2b9f1c8065c256e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0136649de6947525f512f8b272c00bf17d4c53e02f8cc34f2b9f1c8065c256e->enter($__internal_b0136649de6947525f512f8b272c00bf17d4c53e02f8cc34f2b9f1c8065c256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_2089e755907d988b45173b0f54979eb2022be384be941acc7fb1a59b59a267c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2089e755907d988b45173b0f54979eb2022be384be941acc7fb1a59b59a267c6->enter($__internal_2089e755907d988b45173b0f54979eb2022be384be941acc7fb1a59b59a267c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_2089e755907d988b45173b0f54979eb2022be384be941acc7fb1a59b59a267c6->leave($__internal_2089e755907d988b45173b0f54979eb2022be384be941acc7fb1a59b59a267c6_prof);

        
        $__internal_b0136649de6947525f512f8b272c00bf17d4c53e02f8cc34f2b9f1c8065c256e->leave($__internal_b0136649de6947525f512f8b272c00bf17d4c53e02f8cc34f2b9f1c8065c256e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  166 => 29,  147 => 25,  135 => 21,  124 => 20,  105 => 16,  95 => 10,  93 => 9,  82 => 8,  70 => 33,  68 => 32,  65 => 29,  62 => 27,  59 => 25,  56 => 23,  53 => 20,  50 => 18,  47 => 16,  45 => 15,  40 => 11,  37 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':backend:head.html.twig' %}
 {% endblock %}

</head>
<body>
  {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {# Contenu de l'en-tete #}
    {% block Header %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block Navigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block Body %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block Footer %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}
  {#{% endif %}#}
</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources\\views/base.html.twig");
    }
}
