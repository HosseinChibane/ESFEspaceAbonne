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
        $__internal_01354f94abf155e3763f82dddf8d06157b9800045dc6ed9b9ad849697e328925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01354f94abf155e3763f82dddf8d06157b9800045dc6ed9b9ad849697e328925->enter($__internal_01354f94abf155e3763f82dddf8d06157b9800045dc6ed9b9ad849697e328925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d1b9a41680c64ffe9dd1d15d0b3408e320fb82c136c918e8a9f52aa915754141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b9a41680c64ffe9dd1d15d0b3408e320fb82c136c918e8a9f52aa915754141->enter($__internal_d1b9a41680c64ffe9dd1d15d0b3408e320fb82c136c918e8a9f52aa915754141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_01354f94abf155e3763f82dddf8d06157b9800045dc6ed9b9ad849697e328925->leave($__internal_01354f94abf155e3763f82dddf8d06157b9800045dc6ed9b9ad849697e328925_prof);

        
        $__internal_d1b9a41680c64ffe9dd1d15d0b3408e320fb82c136c918e8a9f52aa915754141->leave($__internal_d1b9a41680c64ffe9dd1d15d0b3408e320fb82c136c918e8a9f52aa915754141_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_6a2845473a2d14df24f7832dff9c5982c5952cbe98da00b04c0acac6860a3154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2845473a2d14df24f7832dff9c5982c5952cbe98da00b04c0acac6860a3154->enter($__internal_6a2845473a2d14df24f7832dff9c5982c5952cbe98da00b04c0acac6860a3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_863c2faf0bccc47448837bd7277d56bb1e4ff32f2d448c1646032ccf6a04943b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863c2faf0bccc47448837bd7277d56bb1e4ff32f2d448c1646032ccf6a04943b->enter($__internal_863c2faf0bccc47448837bd7277d56bb1e4ff32f2d448c1646032ccf6a04943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_863c2faf0bccc47448837bd7277d56bb1e4ff32f2d448c1646032ccf6a04943b->leave($__internal_863c2faf0bccc47448837bd7277d56bb1e4ff32f2d448c1646032ccf6a04943b_prof);

        
        $__internal_6a2845473a2d14df24f7832dff9c5982c5952cbe98da00b04c0acac6860a3154->leave($__internal_6a2845473a2d14df24f7832dff9c5982c5952cbe98da00b04c0acac6860a3154_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_c65c8030cd2b1e75b7d4b580a46204fa1253bf5da67071beb38991ef58c866d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65c8030cd2b1e75b7d4b580a46204fa1253bf5da67071beb38991ef58c866d7->enter($__internal_c65c8030cd2b1e75b7d4b580a46204fa1253bf5da67071beb38991ef58c866d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_3363a63fefede6fc88e11316bee7db5032308d529189f3e0469dd5759727e826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3363a63fefede6fc88e11316bee7db5032308d529189f3e0469dd5759727e826->enter($__internal_3363a63fefede6fc88e11316bee7db5032308d529189f3e0469dd5759727e826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_3363a63fefede6fc88e11316bee7db5032308d529189f3e0469dd5759727e826->leave($__internal_3363a63fefede6fc88e11316bee7db5032308d529189f3e0469dd5759727e826_prof);

        
        $__internal_c65c8030cd2b1e75b7d4b580a46204fa1253bf5da67071beb38991ef58c866d7->leave($__internal_c65c8030cd2b1e75b7d4b580a46204fa1253bf5da67071beb38991ef58c866d7_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_60e07b62fddd4fe7cc16fb082afc8ef85cf0952e8cb3a82cf8d4054ccce5101e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e07b62fddd4fe7cc16fb082afc8ef85cf0952e8cb3a82cf8d4054ccce5101e->enter($__internal_60e07b62fddd4fe7cc16fb082afc8ef85cf0952e8cb3a82cf8d4054ccce5101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_58d829dd858986c9129654c2434a61f84b49f4142e7f0ef86418130c7cfc3b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d829dd858986c9129654c2434a61f84b49f4142e7f0ef86418130c7cfc3b17->enter($__internal_58d829dd858986c9129654c2434a61f84b49f4142e7f0ef86418130c7cfc3b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_58d829dd858986c9129654c2434a61f84b49f4142e7f0ef86418130c7cfc3b17->leave($__internal_58d829dd858986c9129654c2434a61f84b49f4142e7f0ef86418130c7cfc3b17_prof);

        
        $__internal_60e07b62fddd4fe7cc16fb082afc8ef85cf0952e8cb3a82cf8d4054ccce5101e->leave($__internal_60e07b62fddd4fe7cc16fb082afc8ef85cf0952e8cb3a82cf8d4054ccce5101e_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_636d23579512b1edf014fefaa60e151b287cbd80c10e7e2991c1aa21df8e2004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636d23579512b1edf014fefaa60e151b287cbd80c10e7e2991c1aa21df8e2004->enter($__internal_636d23579512b1edf014fefaa60e151b287cbd80c10e7e2991c1aa21df8e2004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_b2a553c620b010b44dc493b482b704bc79cc76d4ec2e1c89d94a2933ed658ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a553c620b010b44dc493b482b704bc79cc76d4ec2e1c89d94a2933ed658ba6->enter($__internal_b2a553c620b010b44dc493b482b704bc79cc76d4ec2e1c89d94a2933ed658ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_b2a553c620b010b44dc493b482b704bc79cc76d4ec2e1c89d94a2933ed658ba6->leave($__internal_b2a553c620b010b44dc493b482b704bc79cc76d4ec2e1c89d94a2933ed658ba6_prof);

        
        $__internal_636d23579512b1edf014fefaa60e151b287cbd80c10e7e2991c1aa21df8e2004->leave($__internal_636d23579512b1edf014fefaa60e151b287cbd80c10e7e2991c1aa21df8e2004_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_b4bd009b5be31c43785e337eea7beff938fbc942da6256ba66fd943937a5bbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bd009b5be31c43785e337eea7beff938fbc942da6256ba66fd943937a5bbba->enter($__internal_b4bd009b5be31c43785e337eea7beff938fbc942da6256ba66fd943937a5bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_9c2f4470c1e007b500425ac61da4e45c89d8d825eaf44cb9c300c1ac27f69d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2f4470c1e007b500425ac61da4e45c89d8d825eaf44cb9c300c1ac27f69d4c->enter($__internal_9c2f4470c1e007b500425ac61da4e45c89d8d825eaf44cb9c300c1ac27f69d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_9c2f4470c1e007b500425ac61da4e45c89d8d825eaf44cb9c300c1ac27f69d4c->leave($__internal_9c2f4470c1e007b500425ac61da4e45c89d8d825eaf44cb9c300c1ac27f69d4c_prof);

        
        $__internal_b4bd009b5be31c43785e337eea7beff938fbc942da6256ba66fd943937a5bbba->leave($__internal_b4bd009b5be31c43785e337eea7beff938fbc942da6256ba66fd943937a5bbba_prof);

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
