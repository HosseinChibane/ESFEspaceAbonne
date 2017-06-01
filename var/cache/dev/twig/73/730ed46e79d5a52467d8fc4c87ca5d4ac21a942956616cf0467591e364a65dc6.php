<?php

/* ::base.html.twig */
class __TwigTemplate_067a276229e98f23a9b6ccd7d27671969fcfa7034f7ad9cfbe9d678ca79b18e7 extends Twig_Template
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
        $__internal_f7b7401a5c5cc0223af5248082b0c7e2ad9c86c7277f4f76785bd5d9e2d58903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b7401a5c5cc0223af5248082b0c7e2ad9c86c7277f4f76785bd5d9e2d58903->enter($__internal_f7b7401a5c5cc0223af5248082b0c7e2ad9c86c7277f4f76785bd5d9e2d58903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f31daa10db660e77cb2334b2495284db2d0f94667d156e04bde07dbeeff084db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31daa10db660e77cb2334b2495284db2d0f94667d156e04bde07dbeeff084db->enter($__internal_f31daa10db660e77cb2334b2495284db2d0f94667d156e04bde07dbeeff084db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f7b7401a5c5cc0223af5248082b0c7e2ad9c86c7277f4f76785bd5d9e2d58903->leave($__internal_f7b7401a5c5cc0223af5248082b0c7e2ad9c86c7277f4f76785bd5d9e2d58903_prof);

        
        $__internal_f31daa10db660e77cb2334b2495284db2d0f94667d156e04bde07dbeeff084db->leave($__internal_f31daa10db660e77cb2334b2495284db2d0f94667d156e04bde07dbeeff084db_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_7241ee5200dd53f168ca9648f3f278a36fec7ec90267a9da4af495ecba24a6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7241ee5200dd53f168ca9648f3f278a36fec7ec90267a9da4af495ecba24a6c1->enter($__internal_7241ee5200dd53f168ca9648f3f278a36fec7ec90267a9da4af495ecba24a6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_48a513a73c6c9a39210abdbb9df783dbc7baf91c5cdf8604dd6b57f0cf68b6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a513a73c6c9a39210abdbb9df783dbc7baf91c5cdf8604dd6b57f0cf68b6f8->enter($__internal_48a513a73c6c9a39210abdbb9df783dbc7baf91c5cdf8604dd6b57f0cf68b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_48a513a73c6c9a39210abdbb9df783dbc7baf91c5cdf8604dd6b57f0cf68b6f8->leave($__internal_48a513a73c6c9a39210abdbb9df783dbc7baf91c5cdf8604dd6b57f0cf68b6f8_prof);

        
        $__internal_7241ee5200dd53f168ca9648f3f278a36fec7ec90267a9da4af495ecba24a6c1->leave($__internal_7241ee5200dd53f168ca9648f3f278a36fec7ec90267a9da4af495ecba24a6c1_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_b75528269800d3f6d780eb1d244d556897596902a8a03c412b3dad3a3b506029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75528269800d3f6d780eb1d244d556897596902a8a03c412b3dad3a3b506029->enter($__internal_b75528269800d3f6d780eb1d244d556897596902a8a03c412b3dad3a3b506029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_6ce8ffd962c53fac22d4c44d0cf8780304f2e06681ff300e74c67e467aec3b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce8ffd962c53fac22d4c44d0cf8780304f2e06681ff300e74c67e467aec3b98->enter($__internal_6ce8ffd962c53fac22d4c44d0cf8780304f2e06681ff300e74c67e467aec3b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_6ce8ffd962c53fac22d4c44d0cf8780304f2e06681ff300e74c67e467aec3b98->leave($__internal_6ce8ffd962c53fac22d4c44d0cf8780304f2e06681ff300e74c67e467aec3b98_prof);

        
        $__internal_b75528269800d3f6d780eb1d244d556897596902a8a03c412b3dad3a3b506029->leave($__internal_b75528269800d3f6d780eb1d244d556897596902a8a03c412b3dad3a3b506029_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_4c1819b05551800da9ed6abf5ca40495750d36a0809c47e5dc1f5c99992c81a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1819b05551800da9ed6abf5ca40495750d36a0809c47e5dc1f5c99992c81a4->enter($__internal_4c1819b05551800da9ed6abf5ca40495750d36a0809c47e5dc1f5c99992c81a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_a4b5d7be9a7c43d67da0ddf16298530f4c36a1fbb98f02971c994a143ce39dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b5d7be9a7c43d67da0ddf16298530f4c36a1fbb98f02971c994a143ce39dba->enter($__internal_a4b5d7be9a7c43d67da0ddf16298530f4c36a1fbb98f02971c994a143ce39dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_a4b5d7be9a7c43d67da0ddf16298530f4c36a1fbb98f02971c994a143ce39dba->leave($__internal_a4b5d7be9a7c43d67da0ddf16298530f4c36a1fbb98f02971c994a143ce39dba_prof);

        
        $__internal_4c1819b05551800da9ed6abf5ca40495750d36a0809c47e5dc1f5c99992c81a4->leave($__internal_4c1819b05551800da9ed6abf5ca40495750d36a0809c47e5dc1f5c99992c81a4_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_d4a9deb74d2dfcca0268b5009b8a7495444b4ab5ad339534e735d76d150f3fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a9deb74d2dfcca0268b5009b8a7495444b4ab5ad339534e735d76d150f3fed->enter($__internal_d4a9deb74d2dfcca0268b5009b8a7495444b4ab5ad339534e735d76d150f3fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_79f2aa18dce2b2a2b6869055eb8a4fbe0e0bf0db26891a85cd3ac01ffa3b4941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f2aa18dce2b2a2b6869055eb8a4fbe0e0bf0db26891a85cd3ac01ffa3b4941->enter($__internal_79f2aa18dce2b2a2b6869055eb8a4fbe0e0bf0db26891a85cd3ac01ffa3b4941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_79f2aa18dce2b2a2b6869055eb8a4fbe0e0bf0db26891a85cd3ac01ffa3b4941->leave($__internal_79f2aa18dce2b2a2b6869055eb8a4fbe0e0bf0db26891a85cd3ac01ffa3b4941_prof);

        
        $__internal_d4a9deb74d2dfcca0268b5009b8a7495444b4ab5ad339534e735d76d150f3fed->leave($__internal_d4a9deb74d2dfcca0268b5009b8a7495444b4ab5ad339534e735d76d150f3fed_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_e8ff3191809a563f62b017f87c7a9d0b551abb38601425494918304e0e6eeec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ff3191809a563f62b017f87c7a9d0b551abb38601425494918304e0e6eeec0->enter($__internal_e8ff3191809a563f62b017f87c7a9d0b551abb38601425494918304e0e6eeec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_5ee663041f239d98fc6010c89fb4e8887bdf5f77069113485a1a6e034f715edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee663041f239d98fc6010c89fb4e8887bdf5f77069113485a1a6e034f715edb->enter($__internal_5ee663041f239d98fc6010c89fb4e8887bdf5f77069113485a1a6e034f715edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_5ee663041f239d98fc6010c89fb4e8887bdf5f77069113485a1a6e034f715edb->leave($__internal_5ee663041f239d98fc6010c89fb4e8887bdf5f77069113485a1a6e034f715edb_prof);

        
        $__internal_e8ff3191809a563f62b017f87c7a9d0b551abb38601425494918304e0e6eeec0->leave($__internal_e8ff3191809a563f62b017f87c7a9d0b551abb38601425494918304e0e6eeec0_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\base.html.twig");
    }
}
